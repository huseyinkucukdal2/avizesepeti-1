<?php
class WC_Woocommerce_Catalog_Enquiry_Ajax {

	public function __construct() {
		add_action('wp_ajax_send_enquiry_mail', array(&$this, 'send_product_enqury_mail') );
		add_action( 'wp_ajax_nopriv_send_enquiry_mail', array( &$this, 'send_product_enqury_mail' ) );
		add_action( 'wp_ajax_add_variation_for_enquiry_mail', array( $this, 'add_variation_for_enquiry_mail'));
		add_action( 'wp_ajax_nopriv_add_variation_for_enquiry_mail', array( $this, 'add_variation_for_enquiry_mail'));
	}
	
	public function add_variation_for_enquiry_mail() {
		global $WC_Woocommerce_Catalog_Enquiry, $woocommerce;
		$variation_array_json = stripslashes($_POST['variation_array']);		
		$variation_array = json_decode($variation_array_json, true);
		
		$variation_name = strtolower(sanitize_text_field($_POST['variation_name']));
		$variation_value = sanitize_text_field($_POST['variation_value']);
		$variation_real_name = sanitize_text_field($_POST['variation_real_name']);
		$product_id = (int)$_POST['product_id'];
		$f1 = 0;
		$i = 0;
		if(isset($_SESSION['variation_list']) && $_SESSION['variation_list'] !='') {
			$variation_list = $_SESSION['variation_list'];		
		}
		else {
			$variation_list = '';
		}
		if($variation_list != '') {
			foreach($variation_list as $variation ) {
				if($variation['variation_name'] == $variation_name && $variation['product_id'] == $product_id) {
					if($variation_value == '') {
						unset($variation_list[$i]);
						$variation_list = array_values(array_filter($variation_list));
					}
					else {
						$variation_list[$i]['variation_value'] = $variation_value;
					}
					$f1 = 1;					
				}
				$i++;				
			}			
		}
		$arr = array('variation_name' => $variation_name, 'variation_value' => $variation_value, 'product_id' => $product_id, 'variation_real_name' => $variation_real_name);
		if($f1 == 0) {
			$variation_list[] = $arr;		
		}
		$_SESSION['variation_list'] = $variation_list;		
		die;
	}

	public function send_product_enqury_mail() {
		global $WC_Woocommerce_Catalog_Enquiry, $woocommerce, $product;
		
		$file_name = '';
		$attachments = array();
		$settings = $WC_Woocommerce_Catalog_Enquiry->options;
		
		if(isset($_FILES['fileupload'])){
			$accepted_files = apply_filters( 'wc_catalog_enquiry_accepted_file_types', array('image/png','image/jpg','application/vnd.openxmlformats-officedocument.wordprocessingml.document','application/msword','application/pdf','image/jpeg'));

			// create catalog enquiry sub directory within uploads
			$upload_dir = wp_upload_dir();
			$catalog_enquiry = $upload_dir['basedir'].'/catalog_enquiry';
			if ( ! file_exists( $catalog_enquiry ) ) {
			    wp_mkdir_p( $catalog_enquiry );
			}

			foreach ($_FILES['fileupload'] as $key => $value) {
		        $_FILES['fileupload'][$key] = $value[0]; 
		    }
		    $woo_customer_filesize = 2097152;
		    if(isset($settings['filesize_limit']) && !empty($settings['filesize_limit'])){
		    	$woo_customer_filesize = intval($settings['filesize_limit'])*1024*1024;
		    }
		    
		    if(in_array($_FILES['fileupload']['type'], $accepted_files)){
		    	$file_name = mt_rand().'.'.explode(".",basename($_FILES['fileupload']['name']))[1];
		    	// Check file size
				if ($_FILES['fileupload']['size'] <= $woo_customer_filesize) {
					$target_file = $catalog_enquiry.'/'.$file_name;
				    if (move_uploaded_file($_FILES['fileupload']['tmp_name'], $target_file)){
				    	$attachments[] = $target_file; 
				    }
				}else{
					echo 3;
		    		die;
				}
		    }else{
		    	echo 2;
		    	die;
		    }
		}

		$name = sanitize_text_field($_POST['woo_customer_name']);
		$email = sanitize_email($_POST['woo_customer_email']);
		$product_id = (int)$_POST['woo_customer_product_id'];
		$subject = sanitize_text_field($_POST['woo_customer_subject']);
		$phone = sanitize_text_field($_POST['woo_customer_phone']);
		$comment = sanitize_text_field($_POST['woo_customer_comment']);
		$address = sanitize_text_field($_POST['woo_customer_address']);
		$product_name = sanitize_text_field($_POST['woo_customer_product_name']);
		$product_url = esc_url($_POST['woo_customer_product_url']);
		$enquiry_product_type = sanitize_text_field($_POST['enquiry_product_type']);

		if(isset($settings['is_other_admin_mail']) && $settings['is_other_admin_mail'] == 'Enable') {
			if(isset($settings['other_admin_mail'])) {
				$email_admin = $settings['other_admin_mail'];
			}
			else {
				$email_admin = get_option( 'admin_email' );
			}
		}
		else {
			$email_admin = get_option( 'admin_email' );
		}
		$other_info_product = "";
		$other_info = "";
		if(isset($settings['other_emails'])) {
			$email_admin .= ','.$settings['other_emails'];				
		}
		
		$product = wc_get_product($product_id);
		
		if($product){
			$enquiry_data = apply_filters( 'wc_catalog_enquiry_data', array(
				'cust_name' => $name,
				'cust_email' => $email,
				'product_id' => $product_id,
				'subject' => $subject,
				'phone' => $phone,
				'comment' => $comment,
				'address' => $address,
				'attachments' => $attachments,
				'enquiry_product_type' => $product->get_type(),
				));

			$send_email = WC()->mailer()->emails['WC_Catalog_Enquiry_Email'];

			if($send_email->trigger( $email_admin, $enquiry_data )) {
				echo 1;
				if(isset($_SESSION['variation_list']))
					unset($_SESSION['variation_list']);
				// delete uploaded file from server
				$upload_dir = wp_upload_dir();
				$catalog_enquiry = $upload_dir['basedir'].'/catalog_enquiry/';	
				if (file_exists($catalog_enquiry.$file_name)) {	
					unlink($catalog_enquiry.$file_name);
				}
			}
			else {
				echo 0;
			}
		}	
		die;	  
	}

}
