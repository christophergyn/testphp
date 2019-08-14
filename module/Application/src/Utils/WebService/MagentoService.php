<?php
namespace Application\Utils\WebService;

class anonymous0 {
}

class arrayCoordinate {
}

class ArrayXml {
  public $any; // <anyXML>
  public $arrayType; // string
  public $offset; // arrayCoordinate
  public $id; // ID
  public $href; // anyURI
}

class Struct {
  public $any; // <anyXML>
  public $id; // ID
  public $href; // anyURI
}

class base64 {
}

class duration {
  public $_; // duration
  public $id; // ID
  public $href; // anyURI
}

class ObjectDateTime {
  public $_; // dateTime
  public $id; // ID
  public $href; // anyURI
}

class NOTATION {
  public $_; // QName
  public $id; // ID
  public $href; // anyURI
}

class time {
  public $_; // time
  public $id; // ID
  public $href; // anyURI
}

class date {
  public $_; // date
  public $id; // ID
  public $href; // anyURI
}

class gYearMonth {
  public $_; // gYearMonth
  public $id; // ID
  public $href; // anyURI
}

class gYear {
  public $_; // gYear
  public $id; // ID
  public $href; // anyURI
}

class gMonthDay {
  public $_; // gMonthDay
  public $id; // ID
  public $href; // anyURI
}

class gDay {
  public $_; // gDay
  public $id; // ID
  public $href; // anyURI
}

class gMonth {
  public $_; // gMonth
  public $id; // ID
  public $href; // anyURI
}

class boolean {
  public $_; // boolean
  public $id; // ID
  public $href; // anyURI
}

class base64Binary {
  public $_; // base64Binary
  public $id; // ID
  public $href; // anyURI
}

class hexBinary {
  public $_; // hexBinary
  public $id; // ID
  public $href; // anyURI
}

class float {
  public $_; // float
  public $id; // ID
  public $href; // anyURI
}

class double {
  public $_; // double
  public $id; // ID
  public $href; // anyURI
}

class anyURI {
  public $_; // anyURI
  public $id; // ID
  public $href; // anyURI
}

class QName {
  public $_; // QName
  public $id; // ID
  public $href; // anyURI
}

class string {
  public $_; // string
  public $id; // ID
  public $href; // anyURI
}

class normalizedString {
  public $_; // normalizedString
  public $id; // ID
  public $href; // anyURI
}

class token {
  public $_; // token
  public $id; // ID
  public $href; // anyURI
}

class language {
  public $_; // language
  public $id; // ID
  public $href; // anyURI
}

class Name {
  public $_; // Name
  public $id; // ID
  public $href; // anyURI
}

class NMTOKEN {
  public $_; // NMTOKEN
  public $id; // ID
  public $href; // anyURI
}

class NCName {
  public $_; // NCName
  public $id; // ID
  public $href; // anyURI
}

class NMTOKENS {
  public $_; // NMTOKENS
  public $id; // ID
  public $href; // anyURI
}

class ID {
  public $_; // ID
  public $id; // ID
  public $href; // anyURI
}

class IDREF {
  public $_; // IDREF
  public $id; // ID
  public $href; // anyURI
}

class ENTITY {
  public $_; // ENTITY
  public $id; // ID
  public $href; // anyURI
}

class IDREFS {
  public $_; // IDREFS
  public $id; // ID
  public $href; // anyURI
}

class ENTITIES {
  public $_; // ENTITIES
  public $id; // ID
  public $href; // anyURI
}

class decimal {
  public $_; // decimal
  public $id; // ID
  public $href; // anyURI
}

class integer {
  public $_; // integer
  public $id; // ID
  public $href; // anyURI
}

class nonPositiveInteger {
  public $_; // nonPositiveInteger
  public $id; // ID
  public $href; // anyURI
}

class negativeInteger {
  public $_; // negativeInteger
  public $id; // ID
  public $href; // anyURI
}

class long {
  public $_; // long
  public $id; // ID
  public $href; // anyURI
}

class int {
  public $_; // int
  public $id; // ID
  public $href; // anyURI
}

class short {
  public $_; // short
  public $id; // ID
  public $href; // anyURI
}

class byte {
  public $_; // byte
  public $id; // ID
  public $href; // anyURI
}

class nonNegativeInteger {
  public $_; // nonNegativeInteger
  public $id; // ID
  public $href; // anyURI
}

class unsignedLong {
  public $_; // unsignedLong
  public $id; // ID
  public $href; // anyURI
}

class unsignedInt {
  public $_; // unsignedInt
  public $id; // ID
  public $href; // anyURI
}

class unsignedShort {
  public $_; // unsignedShort
  public $id; // ID
  public $href; // anyURI
}

class unsignedByte {
  public $_; // unsignedByte
  public $id; // ID
  public $href; // anyURI
}

class positiveInteger {
  public $_; // positiveInteger
  public $id; // ID
  public $href; // anyURI
}

class associativeEntity {
  public $key; // string
  public $value; // string
}

class associativeMultiEntity {
  public $key; // string
  public $value; // ArrayOfString
}

class filters {
  public $filter; // associativeArray
  public $complex_filter; // complexFilterArray
}

class complexFilter {
  public $key; // string
  public $value; // associativeEntity
}

class apiMethodEntity {
  public $title; // string
  public $path; // string
  public $name; // string
  public $aliases; // ArrayOfString
}

class apiEntity {
  public $title; // string
  public $name; // string
  public $aliases; // ArrayOfString
  public $methods; // ArrayOfApiMethods
}

class existsFaltureEntity {
  public $code; // string
  public $message; // string
}

class storeEntity {
  public $store_id; // int
  public $code; // string
  public $website_id; // int
  public $group_id; // int
  public $name; // string
  public $sort_order; // int
  public $is_active; // int
}

class magentoInfoEntity {
  public $magento_version; // string
  public $magento_edition; // string
}

class directoryCountryEntity {
  public $country_id; // string
  public $iso2_code; // string
  public $iso3_code; // string
  public $name; // string
}

class directoryRegionEntity {
  public $region_id; // string
  public $code; // string
  public $name; // string
}

class customerCustomerEntityToCreate {
  public $customer_id; // int
  public $email; // string
  public $firstname; // string
  public $lastname; // string
  public $middlename; // string
  public $password; // string
  public $website_id; // int
  public $store_id; // int
  public $group_id; // int
  public $prefix; // string
  public $suffix; // string
  public $dob; // string
  public $taxvat; // string
  public $gender; // int
}

class customerCustomerEntity {
  public $customer_id; // int
  public $created_at; // string
  public $updated_at; // string
  public $increment_id; // string
  public $store_id; // int
  public $website_id; // int
  public $created_in; // string
  public $email; // string
  public $firstname; // string
  public $middlename; // string
  public $lastname; // string
  public $group_id; // int
  public $prefix; // string
  public $suffix; // string
  public $dob; // string
  public $taxvat; // string
  public $confirmation; // boolean
  public $password_hash; // string
}

class customerGroupEntity {
  public $customer_group_id; // int
  public $customer_group_code; // string
}

class customerAddressEntityCreate {
  public $city; // string
  public $company; // string
  public $country_id; // string
  public $fax; // string
  public $firstname; // string
  public $lastname; // string
  public $middlename; // string
  public $postcode; // string
  public $prefix; // string
  public $region_id; // int
  public $region; // string
  public $street; // ArrayOfString
  public $suffix; // string
  public $telephone; // string
  public $is_default_billing; // boolean
  public $is_default_shipping; // boolean
}

class customerAddressEntityItem {
  public $customer_address_id; // int
  public $created_at; // string
  public $updated_at; // string
  public $increment_id; // string
  public $city; // string
  public $company; // string
  public $country_id; // string
  public $fax; // string
  public $firstname; // string
  public $lastname; // string
  public $middlename; // string
  public $postcode; // string
  public $prefix; // string
  public $region; // string
  public $region_id; // int
  public $street; // string
  public $suffix; // string
  public $telephone; // string
  public $is_default_billing; // boolean
  public $is_default_shipping; // boolean
}

class catalogProductAdditionalAttributesEntity {
  public $multi_data; // associativeMultiArray
  public $single_data; // associativeArray
}

class catalogProductEntity {
  public $product_id; // string
  public $sku; // string
  public $name; // string
  public $set; // string
  public $type; // string
  public $category_ids; // ArrayOfString
  public $website_ids; // ArrayOfString
}

class catalogProductRequestAttributes {
  public $attributes; // ArrayOfString
  public $additional_attributes; // ArrayOfString
}

class catalogProductReturnEntity {
  public $product_id; // string
  public $sku; // string
  public $set; // string
  public $type; // string
  public $categories; // ArrayOfString
  public $websites; // ArrayOfString
  public $created_at; // string
  public $updated_at; // string
  public $type_id; // string
  public $name; // string
  public $description; // string
  public $short_description; // string
  public $weight; // string
  public $status; // string
  public $url_key; // string
  public $url_path; // string
  public $visibility; // string
  public $category_ids; // ArrayOfString
  public $website_ids; // ArrayOfString
  public $has_options; // string
  public $gift_message_available; // string
  public $price; // string
  public $special_price; // string
  public $special_from_date; // string
  public $special_to_date; // string
  public $tax_class_id; // string
  public $tier_price; // catalogProductTierPriceEntityArray
  public $meta_title; // string
  public $meta_keyword; // string
  public $meta_description; // string
  public $custom_design; // string
  public $custom_layout_update; // string
  public $options_container; // string
  public $additional_attributes; // associativeArray
}

class catalogProductCreateEntity {
  public $categories; // ArrayOfString
  public $websites; // ArrayOfString
  public $name; // string
  public $description; // string
  public $short_description; // string
  public $weight; // string
  public $status; // string
  public $url_key; // string
  public $url_path; // string
  public $visibility; // string
  public $category_ids; // ArrayOfString
  public $website_ids; // ArrayOfString
  public $has_options; // string
  public $gift_message_available; // string
  public $price; // string
  public $special_price; // string
  public $special_from_date; // string
  public $special_to_date; // string
  public $tax_class_id; // string
  public $tier_price; // catalogProductTierPriceEntityArray
  public $meta_title; // string
  public $meta_keyword; // string
  public $meta_description; // string
  public $custom_design; // string
  public $custom_layout_update; // string
  public $options_container; // string
  public $additional_attributes; // catalogProductAdditionalAttributesEntity
  public $stock_data; // catalogInventoryStockItemUpdateEntity
}

class catalogProductAttributeSetEntity {
  public $set_id; // int
  public $name; // string
}

class catalogProductTypeEntity {
  public $type; // string
  public $label; // string
}

class catalogProductTierPriceEntity {
  public $customer_group_id; // string
  public $website; // string
  public $qty; // int
  public $price; // double
}

class catalogCategoryEntity {
  public $category_id; // int
  public $parent_id; // int
  public $name; // string
  public $is_active; // int
  public $position; // int
  public $level; // int
  public $children; // ArrayOfCatalogCategoryEntities
}

class catalogCategoryEntityNoChildren {
  public $category_id; // int
  public $parent_id; // int
  public $name; // string
  public $is_active; // int
  public $position; // int
  public $level; // int
}

class catalogCategoryTree {
  public $category_id; // int
  public $parent_id; // int
  public $name; // string
  public $position; // int
  public $level; // int
  public $children; // ArrayOfCatalogCategoryEntities
}

class catalogCategoryEntityCreate {
  public $name; // string
  public $is_active; // int
  public $position; // int
  public $available_sort_by; // ArrayOfString
  public $custom_design; // string
  public $custom_design_apply; // int
  public $custom_design_from; // string
  public $custom_design_to; // string
  public $custom_layout_update; // string
  public $default_sort_by; // string
  public $description; // string
  public $display_mode; // string
  public $is_anchor; // int
  public $landing_page; // int
  public $meta_description; // string
  public $meta_keywords; // string
  public $meta_title; // string
  public $page_layout; // string
  public $url_key; // string
  public $include_in_menu; // int
}

class catalogCategoryInfo {
  public $category_id; // string
  public $is_active; // int
  public $position; // string
  public $level; // string
  public $parent_id; // string
  public $all_children; // string
  public $children; // string
  public $created_at; // string
  public $updated_at; // string
  public $name; // string
  public $url_key; // string
  public $description; // string
  public $meta_title; // string
  public $meta_keywords; // string
  public $meta_description; // string
  public $path; // string
  public $url_path; // string
  public $children_count; // int
  public $display_mode; // string
  public $is_anchor; // int
  public $available_sort_by; // ArrayOfString
  public $custom_design; // string
  public $custom_design_apply; // string
  public $custom_design_from; // string
  public $custom_design_to; // string
  public $page_layout; // string
  public $custom_layout_update; // string
  public $default_sort_by; // string
  public $landing_page; // int
  public $include_in_menu; // int
  public $custom_use_parent_settings; // int
  public $custom_apply_to_products; // int
  public $filter_price_range; // string
}

class catalogAssignedProduct {
  public $product_id; // int
  public $type; // string
  public $set; // int
  public $sku; // string
  public $position; // int
}

class catalogAttributeEntity {
  public $attribute_id; // int
  public $code; // string
  public $type; // string
  public $required; // string
  public $scope; // string
}

class catalogAttributeOptionEntity {
  public $label; // string
  public $value; // string
}

class catalogProductImageEntity {
  public $file; // string
  public $label; // string
  public $position; // string
  public $exclude; // string
  public $url; // string
  public $types; // ArrayOfString
}

class catalogProductAttributeMediaTypeEntity {
  public $code; // string
  public $scope; // string
}

class catalogProductImageFileEntity {
  public $content; // string
  public $mime; // string
  public $name; // string
}

class catalogProductAttributeMediaCreateEntity {
  public $file; // catalogProductImageFileEntity
  public $label; // string
  public $position; // string
  public $types; // ArrayOfString
  public $exclude; // string
  public $remove; // string
}

class catalogProductLinkEntity {
  public $product_id; // string
  public $type; // string
  public $set; // string
  public $sku; // string
  public $position; // string
  public $qty; // string
}

class catalogProductLinkAttributeEntity {
  public $code; // string
  public $type; // string
}

class catalogProductAttributeFrontendLabelEntity {
  public $store_id; // string
  public $label; // string
}

class catalogProductAttributeEntityToCreate {
  public $attribute_code; // string
  public $frontend_input; // string
  public $scope; // string
  public $default_value; // string
  public $is_unique; // int
  public $is_required; // int
  public $apply_to; // ArrayOfString
  public $is_configurable; // int
  public $is_searchable; // int
  public $is_visible_in_advanced_search; // int
  public $is_comparable; // int
  public $is_used_for_promo_rules; // int
  public $is_visible_on_front; // int
  public $used_in_product_listing; // int
  public $additional_fields; // associativeArray
  public $frontend_label; // catalogProductAttributeFrontendLabelArray
}

class catalogProductAttributeEntityToUpdate {
  public $scope; // string
  public $default_value; // string
  public $is_unique; // int
  public $is_required; // int
  public $apply_to; // ArrayOfString
  public $is_configurable; // int
  public $is_searchable; // int
  public $is_visible_in_advanced_search; // int
  public $is_comparable; // int
  public $is_used_for_promo_rules; // int
  public $is_visible_on_front; // int
  public $used_in_product_listing; // int
  public $additional_fields; // associativeArray
  public $frontend_label; // catalogProductAttributeFrontendLabelArray
}

class catalogProductAttributeEntity {
  public $attribute_id; // string
  public $attribute_code; // string
  public $frontend_input; // string
  public $scope; // string
  public $default_value; // string
  public $is_unique; // int
  public $is_required; // int
  public $apply_to; // ArrayOfString
  public $is_configurable; // int
  public $is_searchable; // int
  public $is_visible_in_advanced_search; // int
  public $is_comparable; // int
  public $is_used_for_promo_rules; // int
  public $is_visible_on_front; // int
  public $used_in_product_listing; // int
  public $additional_fields; // associativeArray
  public $options; // catalogAttributeOptionEntityArray
  public $frontend_label; // catalogProductAttributeFrontendLabelArray
}

class catalogProductAttributeOptionLabelEntity {
  public $store_id; // ArrayOfString
  public $value; // string
}

class catalogProductAttributeOptionEntityToAdd {
  public $label; // catalogProductAttributeOptionLabelArray
  public $order; // int
  public $is_default; // int
}

class catalogProductCustomOptionAdditionalFieldsEntity {
  public $title; // string
  public $price; // string
  public $price_type; // string
  public $sku; // string
  public $max_characters; // string
  public $sort_order; // string
  public $file_extension; // string
  public $image_size_x; // string
  public $image_size_y; // string
  public $value_id; // string
}

class catalogProductCustomOptionToAdd {
  public $title; // string
  public $type; // string
  public $sort_order; // string
  public $is_require; // int
  public $additional_fields; // catalogProductCustomOptionAdditionalFieldsArray
}

class catalogProductCustomOptionToUpdate {
  public $title; // string
  public $type; // string
  public $sort_order; // string
  public $is_require; // int
  public $additional_fields; // catalogProductCustomOptionAdditionalFieldsArray
}

class catalogProductCustomOptionInfoEntity {
  public $title; // string
  public $type; // string
  public $sort_order; // string
  public $is_require; // int
  public $additional_fields; // catalogProductCustomOptionAdditionalFieldsArray
}

class catalogProductCustomOptionListEntity {
  public $option_id; // string
  public $title; // string
  public $type; // string
  public $sort_order; // string
  public $is_require; // int
}

class catalogProductCustomOptionTypesEntity {
  public $label; // string
  public $value; // string
}

class catalogProductCustomOptionValueInfoEntity {
  public $value_id; // string
  public $option_id; // string
  public $sku; // string
  public $sort_order; // string
  public $default_price; // string
  public $default_price_type; // string
  public $store_price; // string
  public $store_price_type; // string
  public $price; // string
  public $price_type; // string
  public $default_title; // string
  public $store_title; // string
  public $title; // string
}

class catalogProductCustomOptionValueListEntity {
  public $value_id; // string
  public $title; // string
  public $price; // string
  public $price_type; // string
  public $sku; // string
  public $sort_order; // string
}

class catalogProductCustomOptionValueAddEntity {
  public $title; // string
  public $price; // string
  public $price_type; // string
  public $sku; // string
  public $sort_order; // string
}

class catalogProductCustomOptionValueUpdateEntity {
  public $title; // string
  public $price; // string
  public $price_type; // string
  public $sku; // string
  public $sort_order; // string
}

class catalogProductSpecialPriceReturnEntity {
  public $special_price; // string
  public $special_from_date; // string
  public $special_to_date; // string
}

class salesOrderEntity {
  public $increment_id; // string
  public $parent_id; // string
  public $store_id; // string
  public $created_at; // string
  public $updated_at; // string
  public $is_active; // string
  public $customer_id; // string
  public $tax_amount; // string
  public $shipping_amount; // string
  public $discount_amount; // string
  public $subtotal; // string
  public $grand_total; // string
  public $total_paid; // string
  public $total_refunded; // string
  public $total_qty_ordered; // string
  public $total_canceled; // string
  public $total_invoiced; // string
  public $total_online_refunded; // string
  public $total_offline_refunded; // string
  public $base_tax_amount; // string
  public $base_shipping_amount; // string
  public $base_discount_amount; // string
  public $base_subtotal; // string
  public $base_grand_total; // string
  public $base_total_paid; // string
  public $base_total_refunded; // string
  public $base_total_qty_ordered; // string
  public $base_total_canceled; // string
  public $base_total_invoiced; // string
  public $base_total_online_refunded; // string
  public $base_total_offline_refunded; // string
  public $billing_address_id; // string
  public $billing_firstname; // string
  public $billing_lastname; // string
  public $shipping_address_id; // string
  public $shipping_firstname; // string
  public $shipping_lastname; // string
  public $billing_name; // string
  public $shipping_name; // string
  public $store_to_base_rate; // string
  public $store_to_order_rate; // string
  public $base_to_global_rate; // string
  public $base_to_order_rate; // string
  public $weight; // string
  public $store_name; // string
  public $remote_ip; // string
  public $status; // string
  public $state; // string
  public $applied_rule_ids; // string
  public $global_currency_code; // string
  public $base_currency_code; // string
  public $store_currency_code; // string
  public $order_currency_code; // string
  public $shipping_method; // string
  public $shipping_description; // string
  public $customer_email; // string
  public $customer_firstname; // string
  public $customer_lastname; // string
  public $quote_id; // string
  public $is_virtual; // string
  public $customer_group_id; // string
  public $customer_note_notify; // string
  public $customer_is_guest; // string
  public $email_sent; // string
  public $order_id; // string
  public $gift_message_id; // string
  public $gift_message; // string
  public $shipping_address; // salesOrderAddressEntity
  public $billing_address; // salesOrderAddressEntity
  public $items; // salesOrderItemEntityArray
  public $payment; // salesOrderPaymentEntity
  public $status_history; // salesOrderStatusHistoryEntityArray
}

class salesOrderListEntity {
  public $increment_id; // string
  public $store_id; // string
  public $created_at; // string
  public $updated_at; // string
  public $customer_id; // string
  public $tax_amount; // string
  public $shipping_amount; // string
  public $discount_amount; // string
  public $subtotal; // string
  public $grand_total; // string
  public $total_paid; // string
  public $total_refunded; // string
  public $total_qty_ordered; // string
  public $total_canceled; // string
  public $total_invoiced; // string
  public $total_online_refunded; // string
  public $total_offline_refunded; // string
  public $base_tax_amount; // string
  public $base_shipping_amount; // string
  public $base_discount_amount; // string
  public $base_subtotal; // string
  public $base_grand_total; // string
  public $base_total_paid; // string
  public $base_total_refunded; // string
  public $base_total_qty_ordered; // string
  public $base_total_canceled; // string
  public $base_total_invoiced; // string
  public $base_total_online_refunded; // string
  public $base_total_offline_refunded; // string
  public $billing_address_id; // string
  public $billing_firstname; // string
  public $billing_lastname; // string
  public $shipping_address_id; // string
  public $shipping_firstname; // string
  public $shipping_lastname; // string
  public $billing_name; // string
  public $shipping_name; // string
  public $store_to_base_rate; // string
  public $store_to_order_rate; // string
  public $base_to_global_rate; // string
  public $base_to_order_rate; // string
  public $weight; // string
  public $store_name; // string
  public $remote_ip; // string
  public $status; // string
  public $state; // string
  public $applied_rule_ids; // string
  public $global_currency_code; // string
  public $base_currency_code; // string
  public $store_currency_code; // string
  public $order_currency_code; // string
  public $shipping_method; // string
  public $shipping_description; // string
  public $customer_email; // string
  public $customer_firstname; // string
  public $customer_lastname; // string
  public $quote_id; // string
  public $is_virtual; // string
  public $customer_group_id; // string
  public $customer_note_notify; // string
  public $customer_is_guest; // string
  public $email_sent; // string
  public $order_id; // string
  public $gift_message_id; // string
  public $coupon_code; // string
  public $protect_code; // string
  public $base_discount_canceled; // string
  public $base_discount_invoiced; // string
  public $base_discount_refunded; // string
  public $base_shipping_canceled; // string
  public $base_shipping_invoiced; // string
  public $base_shipping_refunded; // string
  public $base_shipping_tax_amount; // string
  public $base_shipping_tax_refunded; // string
  public $base_subtotal_canceled; // string
  public $base_subtotal_invoiced; // string
  public $base_subtotal_refunded; // string
  public $base_tax_canceled; // string
  public $base_tax_invoiced; // string
  public $base_tax_refunded; // string
  public $base_total_invoiced_cost; // string
  public $discount_canceled; // string
  public $discount_invoiced; // string
  public $discount_refunded; // string
  public $shipping_canceled; // string
  public $shipping_invoiced; // string
  public $shipping_refunded; // string
  public $shipping_tax_amount; // string
  public $shipping_tax_refunded; // string
  public $subtotal_canceled; // string
  public $subtotal_invoiced; // string
  public $subtotal_refunded; // string
  public $tax_canceled; // string
  public $tax_invoiced; // string
  public $tax_refunded; // string
  public $can_ship_partially; // string
  public $can_ship_partially_item; // string
  public $edit_increment; // string
  public $forced_do_shipment_with_invoice; // string
  public $payment_authorization_expiration; // string
  public $paypal_ipn_customer_notified; // string
  public $quote_address_id; // string
  public $adjustment_negative; // string
  public $adjustment_positive; // string
  public $base_adjustment_negative; // string
  public $base_adjustment_positive; // string
  public $base_shipping_discount_amount; // string
  public $base_subtotal_incl_tax; // string
  public $base_total_due; // string
  public $payment_authorization_amount; // string
  public $shipping_discount_amount; // string
  public $subtotal_incl_tax; // string
  public $total_due; // string
  public $customer_dob; // string
  public $customer_middlename; // string
  public $customer_prefix; // string
  public $customer_suffix; // string
  public $customer_taxvat; // string
  public $discount_description; // string
  public $ext_customer_id; // string
  public $ext_order_id; // string
  public $hold_before_state; // string
  public $hold_before_status; // string
  public $original_increment_id; // string
  public $relation_child_id; // string
  public $relation_child_real_id; // string
  public $relation_parent_id; // string
  public $relation_parent_real_id; // string
  public $x_forwarded_for; // string
  public $customer_note; // string
  public $total_item_count; // string
  public $customer_gender; // string
  public $hidden_tax_amount; // string
  public $base_hidden_tax_amount; // string
  public $shipping_hidden_tax_amount; // string
  public $base_shipping_hidden_tax_amount; // string
  public $hidden_tax_invoiced; // string
  public $base_hidden_tax_invoiced; // string
  public $hidden_tax_refunded; // string
  public $base_hidden_tax_refunded; // string
  public $shipping_incl_tax; // string
  public $base_shipping_incl_tax; // string
  public $base_customer_balance_amount; // string
  public $customer_balance_amount; // string
  public $base_customer_balance_invoiced; // string
  public $customer_balance_invoiced; // string
  public $base_customer_balance_refunded; // string
  public $customer_balance_refunded; // string
  public $base_customer_balance_total_refunded; // string
  public $customer_balance_total_refunded; // string
  public $gift_cards; // string
  public $base_gift_cards_amount; // string
  public $gift_cards_amount; // string
  public $base_gift_cards_invoiced; // string
  public $gift_cards_invoiced; // string
  public $base_gift_cards_refunded; // string
  public $gift_cards_refunded; // string
  public $reward_points_balance; // string
  public $base_reward_currency_amount; // string
  public $reward_currency_amount; // string
  public $base_reward_currency_amount_invoiced; // string
  public $reward_currency_amount_invoiced; // string
  public $base_reward_currency_amount_refunded; // string
  public $reward_currency_amount_refunded; // string
  public $reward_points_balance_refunded; // string
  public $reward_points_balance_to_refund; // string
  public $reward_salesrule_points; // string
  public $firstname; // string
  public $lastname; // string
  public $telephone; // string
  public $postcode; // string
}

class salesOrderAddressEntity {
  public $increment_id; // string
  public $parent_id; // string
  public $created_at; // string
  public $updated_at; // string
  public $is_active; // string
  public $address_type; // string
  public $firstname; // string
  public $lastname; // string
  public $company; // string
  public $street; // string
  public $city; // string
  public $region; // string
  public $postcode; // string
  public $country_id; // string
  public $telephone; // string
  public $fax; // string
  public $region_id; // string
  public $address_id; // string
}

class salesOrderItemEntity {
  public $item_id; // string
  public $order_id; // string
  public $quote_item_id; // string
  public $created_at; // string
  public $updated_at; // string
  public $product_id; // string
  public $product_type; // string
  public $product_options; // string
  public $weight; // string
  public $is_virtual; // string
  public $sku; // string
  public $name; // string
  public $applied_rule_ids; // string
  public $free_shipping; // string
  public $is_qty_decimal; // string
  public $no_discount; // string
  public $qty_canceled; // string
  public $qty_invoiced; // string
  public $qty_ordered; // string
  public $qty_refunded; // string
  public $qty_shipped; // string
  public $cost; // string
  public $price; // string
  public $base_price; // string
  public $original_price; // string
  public $base_original_price; // string
  public $tax_percent; // string
  public $tax_amount; // string
  public $base_tax_amount; // string
  public $tax_invoiced; // string
  public $base_tax_invoiced; // string
  public $discount_percent; // string
  public $discount_amount; // string
  public $base_discount_amount; // string
  public $discount_invoiced; // string
  public $base_discount_invoiced; // string
  public $amount_refunded; // string
  public $base_amount_refunded; // string
  public $row_total; // string
  public $base_row_total; // string
  public $row_invoiced; // string
  public $base_row_invoiced; // string
  public $row_weight; // string
  public $gift_message_id; // string
  public $gift_message; // string
  public $gift_message_available; // string
  public $base_tax_before_discount; // string
  public $tax_before_discount; // string
  public $weee_tax_applied; // string
  public $weee_tax_applied_amount; // string
  public $weee_tax_applied_row_amount; // string
  public $base_weee_tax_applied_amount; // string
  public $base_weee_tax_applied_row_amount; // string
  public $weee_tax_disposition; // string
  public $weee_tax_row_disposition; // string
  public $base_weee_tax_disposition; // string
  public $base_weee_tax_row_disposition; // string
}

class orderItemIdQty {
  public $order_item_id; // int
  public $qty; // double
}

class salesOrderPaymentEntity {
  public $increment_id; // string
  public $parent_id; // string
  public $created_at; // string
  public $updated_at; // string
  public $is_active; // string
  public $amount_ordered; // string
  public $shipping_amount; // string
  public $base_amount_ordered; // string
  public $base_shipping_amount; // string
  public $method; // string
  public $po_number; // string
  public $cc_type; // string
  public $cc_number_enc; // string
  public $cc_last4; // string
  public $cc_owner; // string
  public $cc_exp_month; // string
  public $cc_exp_year; // string
  public $cc_ss_start_month; // string
  public $cc_ss_start_year; // string
  public $payment_id; // string
}

class salesOrderStatusHistoryEntity {
  public $increment_id; // string
  public $parent_id; // string
  public $created_at; // string
  public $updated_at; // string
  public $is_active; // string
  public $is_customer_notified; // string
  public $status; // string
  public $comment; // string
}

class salesOrderShipmentEntity {
  public $increment_id; // string
  public $parent_id; // string
  public $store_id; // string
  public $created_at; // string
  public $updated_at; // string
  public $is_active; // string
  public $shipping_address_id; // string
  public $shipping_firstname; // string
  public $shipping_lastname; // string
  public $order_id; // string
  public $order_increment_id; // string
  public $order_created_at; // string
  public $total_qty; // string
  public $shipment_id; // string
  public $items; // salesOrderShipmentItemEntityArray
  public $tracks; // salesOrderShipmentTrackEntityArray
  public $comments; // salesOrderShipmentCommentEntityArray
}

class salesOrderShipmentCommentEntity {
  public $increment_id; // string
  public $parent_id; // string
  public $created_at; // string
  public $updated_at; // string
  public $is_active; // string
  public $comment; // string
  public $is_customer_notified; // string
  public $comment_id; // string
}

class salesOrderShipmentTrackEntity {
  public $increment_id; // string
  public $parent_id; // string
  public $created_at; // string
  public $updated_at; // string
  public $is_active; // string
  public $carrier_code; // string
  public $title; // string
  public $number; // string
  public $order_id; // string
  public $track_id; // string
}

class salesOrderShipmentItemEntity {
  public $increment_id; // string
  public $parent_id; // string
  public $created_at; // string
  public $updated_at; // string
  public $is_active; // string
  public $sku; // string
  public $name; // string
  public $order_item_id; // string
  public $product_id; // string
  public $weight; // string
  public $price; // string
  public $qty; // string
  public $item_id; // string
}

class salesOrderInvoiceEntity {
  public $increment_id; // string
  public $parent_id; // string
  public $store_id; // string
  public $created_at; // string
  public $updated_at; // string
  public $is_active; // string
  public $global_currency_code; // string
  public $base_currency_code; // string
  public $store_currency_code; // string
  public $order_currency_code; // string
  public $store_to_base_rate; // string
  public $store_to_order_rate; // string
  public $base_to_global_rate; // string
  public $base_to_order_rate; // string
  public $subtotal; // string
  public $base_subtotal; // string
  public $base_grand_total; // string
  public $discount_amount; // string
  public $base_discount_amount; // string
  public $shipping_amount; // string
  public $base_shipping_amount; // string
  public $tax_amount; // string
  public $base_tax_amount; // string
  public $billing_address_id; // string
  public $billing_firstname; // string
  public $billing_lastname; // string
  public $order_id; // string
  public $order_increment_id; // string
  public $order_created_at; // string
  public $state; // string
  public $grand_total; // string
  public $invoice_id; // string
  public $items; // salesOrderInvoiceItemEntityArray
  public $comments; // salesOrderInvoiceCommentEntityArray
}

class salesOrderInvoiceItemEntity {
  public $increment_id; // string
  public $parent_id; // string
  public $created_at; // string
  public $updated_at; // string
  public $is_active; // string
  public $weee_tax_applied; // string
  public $qty; // string
  public $cost; // string
  public $price; // string
  public $tax_amount; // string
  public $row_total; // string
  public $base_price; // string
  public $base_tax_amount; // string
  public $base_row_total; // string
  public $base_weee_tax_applied_amount; // string
  public $base_weee_tax_applied_row_amount; // string
  public $weee_tax_applied_amount; // string
  public $weee_tax_applied_row_amount; // string
  public $weee_tax_disposition; // string
  public $weee_tax_row_disposition; // string
  public $base_weee_tax_disposition; // string
  public $base_weee_tax_row_disposition; // string
  public $sku; // string
  public $name; // string
  public $order_item_id; // string
  public $product_id; // string
  public $item_id; // string
}

class salesOrderInvoiceCommentEntity {
  public $increment_id; // string
  public $parent_id; // string
  public $created_at; // string
  public $updated_at; // string
  public $is_active; // string
  public $comment; // string
  public $is_customer_notified; // string
  public $comment_id; // string
}

class salesOrderCreditmemoEntity {
  public $updated_at; // string
  public $created_at; // string
  public $increment_id; // string
  public $transaction_id; // string
  public $global_currency_code; // string
  public $base_currency_code; // string
  public $order_currency_code; // string
  public $store_currency_code; // string
  public $cybersource_token; // string
  public $invoice_id; // string
  public $billing_address_id; // string
  public $shipping_address_id; // string
  public $state; // string
  public $creditmemo_status; // string
  public $email_sent; // string
  public $order_id; // string
  public $tax_amount; // string
  public $shipping_tax_amount; // string
  public $base_tax_amount; // string
  public $base_adjustment_positive; // string
  public $base_grand_total; // string
  public $adjustment; // string
  public $subtotal; // string
  public $discount_amount; // string
  public $base_subtotal; // string
  public $base_adjustment; // string
  public $base_to_global_rate; // string
  public $store_to_base_rate; // string
  public $base_shipping_amount; // string
  public $adjustment_negative; // string
  public $subtotal_incl_tax; // string
  public $shipping_amount; // string
  public $base_subtotal_incl_tax; // string
  public $base_adjustment_negative; // string
  public $grand_total; // string
  public $base_discount_amount; // string
  public $base_to_order_rate; // string
  public $store_to_order_rate; // string
  public $base_shipping_tax_amount; // string
  public $adjustment_positive; // string
  public $store_id; // string
  public $hidden_tax_amount; // string
  public $base_hidden_tax_amount; // string
  public $shipping_hidden_tax_amount; // string
  public $base_shipping_hidden_tax_amnt; // string
  public $shipping_incl_tax; // string
  public $base_shipping_incl_tax; // string
  public $base_customer_balance_amount; // string
  public $customer_balance_amount; // string
  public $bs_customer_bal_total_refunded; // string
  public $customer_bal_total_refunded; // string
  public $base_gift_cards_amount; // string
  public $gift_cards_amount; // string
  public $gw_base_price; // string
  public $gw_price; // string
  public $gw_items_base_price; // string
  public $gw_items_price; // string
  public $gw_card_base_price; // string
  public $gw_card_price; // string
  public $gw_base_tax_amount; // string
  public $gw_tax_amount; // string
  public $gw_items_base_tax_amount; // string
  public $gw_items_tax_amount; // string
  public $gw_card_base_tax_amount; // string
  public $gw_card_tax_amount; // string
  public $base_reward_currency_amount; // string
  public $reward_currency_amount; // string
  public $reward_points_balance; // string
  public $reward_points_balance_refund; // string
  public $creditmemo_id; // string
  public $items; // salesOrderCreditmemoItemEntityArray
  public $comments; // salesOrderCreditmemoCommentEntityArray
}

class salesOrderCreditmemoItemEntity {
  public $item_id; // string
  public $parent_id; // string
  public $weee_tax_applied_row_amount; // string
  public $base_price; // string
  public $base_weee_tax_row_disposition; // string
  public $tax_amount; // string
  public $base_weee_tax_applied_amount; // string
  public $weee_tax_row_disposition; // string
  public $base_row_total; // string
  public $discount_amount; // string
  public $row_total; // string
  public $weee_tax_applied_amount; // string
  public $base_discount_amount; // string
  public $base_weee_tax_disposition; // string
  public $price_incl_tax; // string
  public $base_tax_amount; // string
  public $weee_tax_disposition; // string
  public $base_price_incl_tax; // string
  public $qty; // string
  public $base_cost; // string
  public $base_weee_tax_applied_row_amount; // string
  public $price; // string
  public $base_row_total_incl_tax; // string
  public $row_total_incl_tax; // string
  public $product_id; // string
  public $order_item_id; // string
  public $additional_data; // string
  public $description; // string
  public $weee_tax_applied; // string
  public $sku; // string
  public $name; // string
  public $hidden_tax_amount; // string
  public $base_hidden_tax_amount; // string
}

class salesOrderCreditmemoCommentEntity {
  public $parent_id; // string
  public $created_at; // string
  public $comment; // string
  public $is_customer_notified; // string
  public $comment_id; // string
  public $is_visible_on_front; // string
}

class salesOrderCreditmemoData {
  public $qtys; // orderItemIdQtyArray
  public $shipping_amount; // double
  public $adjustment_positive; // double
  public $adjustment_negative; // double
}

class catalogInventoryStockItemEntity {
  public $product_id; // string
  public $sku; // string
  public $qty; // string
  public $is_in_stock; // string
}

class catalogInventoryStockItemUpdateEntity {
  public $qty; // string
  public $is_in_stock; // int
  public $manage_stock; // int
  public $use_config_manage_stock; // int
  public $min_qty; // int
  public $use_config_min_qty; // int
  public $min_sale_qty; // int
  public $use_config_min_sale_qty; // int
  public $max_sale_qty; // int
  public $use_config_max_sale_qty; // int
  public $is_qty_decimal; // int
  public $backorders; // int
  public $use_config_backorders; // int
  public $notify_stock_qty; // int
  public $use_config_notify_stock_qty; // int
}

class shoppingCartAddressEntity {
  public $address_id; // string
  public $created_at; // string
  public $updated_at; // string
  public $customer_id; // string
  public $save_in_address_book; // int
  public $customer_address_id; // string
  public $address_type; // string
  public $email; // string
  public $prefix; // string
  public $firstname; // string
  public $middlename; // string
  public $lastname; // string
  public $suffix; // string
  public $company; // string
  public $street; // string
  public $city; // string
  public $region; // string
  public $region_id; // string
  public $postcode; // string
  public $country_id; // string
  public $telephone; // string
  public $fax; // string
  public $same_as_billing; // int
  public $free_shipping; // int
  public $shipping_method; // string
  public $shipping_description; // string
  public $weight; // double
}

class shoppingCartItemEntity {
  public $item_id; // string
  public $created_at; // string
  public $updated_at; // string
  public $product_id; // string
  public $store_id; // string
  public $parent_item_id; // string
  public $is_virtual; // int
  public $sku; // string
  public $name; // string
  public $description; // string
  public $applied_rule_ids; // string
  public $additional_data; // string
  public $free_shipping; // string
  public $is_qty_decimal; // string
  public $no_discount; // string
  public $weight; // double
  public $qty; // double
  public $price; // double
  public $base_price; // double
  public $custom_price; // double
  public $discount_percent; // double
  public $discount_amount; // double
  public $base_discount_amount; // double
  public $tax_percent; // double
  public $tax_amount; // double
  public $base_tax_amount; // double
  public $row_total; // double
  public $base_row_total; // double
  public $row_total_with_discount; // double
  public $row_weight; // double
  public $product_type; // string
  public $base_tax_before_discount; // double
  public $tax_before_discount; // double
  public $original_custom_price; // double
  public $base_cost; // double
  public $price_incl_tax; // double
  public $base_price_incl_tax; // double
  public $row_total_incl_tax; // double
  public $base_row_total_incl_tax; // double
  public $gift_message_id; // string
  public $gift_message; // string
  public $gift_message_available; // string
  public $weee_tax_applied; // double
  public $weee_tax_applied_amount; // double
  public $weee_tax_applied_row_amount; // double
  public $base_weee_tax_applied_amount; // double
  public $base_weee_tax_applied_row_amount; // double
  public $weee_tax_disposition; // double
  public $weee_tax_row_disposition; // double
  public $base_weee_tax_disposition; // double
  public $base_weee_tax_row_disposition; // double
  public $tax_class_id; // string
}

class shoppingCartPaymentEntity {
  public $payment_id; // string
  public $created_at; // string
  public $updated_at; // string
  public $method; // string
  public $cc_type; // string
  public $cc_number_enc; // string
  public $cc_last4; // string
  public $cc_cid_enc; // string
  public $cc_owner; // string
  public $cc_exp_month; // string
  public $cc_exp_year; // string
  public $cc_ss_owner; // string
  public $cc_ss_start_month; // string
  public $cc_ss_start_year; // string
  public $cc_ss_issue; // string
  public $po_number; // string
  public $additional_data; // string
  public $additional_information; // string
}

class shoppingCartInfoEntity {
  public $store_id; // string
  public $created_at; // string
  public $updated_at; // string
  public $converted_at; // string
  public $quote_id; // int
  public $is_active; // int
  public $is_virtual; // int
  public $is_multi_shipping; // int
  public $items_count; // double
  public $items_qty; // double
  public $orig_order_id; // string
  public $store_to_base_rate; // string
  public $store_to_quote_rate; // string
  public $base_currency_code; // string
  public $store_currency_code; // string
  public $quote_currency_code; // string
  public $grand_total; // string
  public $base_grand_total; // string
  public $checkout_method; // string
  public $customer_id; // string
  public $customer_tax_class_id; // string
  public $customer_group_id; // int
  public $customer_email; // string
  public $customer_prefix; // string
  public $customer_firstname; // string
  public $customer_middlename; // string
  public $customer_lastname; // string
  public $customer_suffix; // string
  public $customer_note; // string
  public $customer_note_notify; // string
  public $customer_is_guest; // string
  public $applied_rule_ids; // string
  public $reserved_order_id; // string
  public $password_hash; // string
  public $coupon_code; // string
  public $global_currency_code; // string
  public $base_to_global_rate; // double
  public $base_to_quote_rate; // double
  public $customer_taxvat; // string
  public $customer_gender; // string
  public $subtotal; // double
  public $base_subtotal; // double
  public $subtotal_with_discount; // double
  public $base_subtotal_with_discount; // double
  public $ext_shipping_info; // string
  public $gift_message_id; // string
  public $gift_message; // string
  public $customer_balance_amount_used; // double
  public $base_customer_balance_amount_used; // double
  public $use_customer_balance; // string
  public $gift_cards_amount; // string
  public $base_gift_cards_amount; // string
  public $gift_cards_amount_used; // string
  public $use_reward_points; // string
  public $reward_points_balance; // string
  public $base_reward_currency_amount; // string
  public $reward_currency_amount; // string
  public $shipping_address; // shoppingCartAddressEntity
  public $billing_address; // shoppingCartAddressEntity
  public $items; // shoppingCartItemEntityArray
  public $payment; // shoppingCartPaymentEntity
}

class shoppingCartTotalsEntity {
  public $title; // string
  public $amount; // double
}

class shoppingCartLicenseEntity {
  public $agreement_id; // string
  public $name; // string
  public $content; // string
  public $is_active; // int
  public $is_html; // int
}

class shoppingCartProductEntity {
  public $product_id; // string
  public $sku; // string
  public $qty; // double
  public $options; // associativeArray
  public $bundle_option; // associativeArray
  public $bundle_option_qty; // associativeArray
  public $links; // ArrayOfString
}

class shoppingCartCustomerEntity {
  public $mode; // string
  public $customer_id; // int
  public $email; // string
  public $firstname; // string
  public $lastname; // string
  public $password; // string
  public $confirmation; // string
  public $website_id; // int
  public $store_id; // int
  public $group_id; // int
}

class shoppingCartCustomerAddressEntity {
  public $mode; // string
  public $address_id; // string
  public $firstname; // string
  public $lastname; // string
  public $company; // string
  public $street; // string
  public $city; // string
  public $region; // string
  public $region_id; // string
  public $postcode; // string
  public $country_id; // string
  public $telephone; // string
  public $fax; // string
  public $is_default_billing; // int
  public $is_default_shipping; // int
}

class shoppingCartShippingMethodEntity {
  public $code; // string
  public $carrier; // string
  public $carrier_title; // string
  public $method; // string
  public $method_title; // string
  public $method_description; // string
  public $price; // double
}

class shoppingCartPaymentMethodEntity {
  public $po_number; // string
  public $method; // string
  public $cc_cid; // string
  public $cc_owner; // string
  public $cc_number; // string
  public $cc_type; // string
  public $cc_exp_year; // string
  public $cc_exp_month; // string
}

class shoppingCartPaymentMethodResponseEntity {
  public $code; // string
  public $title; // string
  public $cc_types; // associativeArray
}

class catalogProductTagListEntity {
  public $tag_id; // string
  public $name; // string
}

class catalogProductTagAddEntity {
  public $tag; // string
  public $product_id; // string
  public $customer_id; // string
  public $store; // string
}

class catalogProductTagUpdateEntity {
  public $name; // string
  public $status; // string
  public $base_popularity; // string
}

class catalogProductTagInfoEntity {
  public $name; // string
  public $status; // string
  public $base_popularity; // string
  public $products; // associativeArray
}

class giftMessageEntity {
  public $from; // string
  public $to; // string
  public $message; // string
}

class giftMessageResponse {
  public $entityId; // string
  public $result; // boolean
  public $error; // string
}

class giftMessageAssociativeProductsEntity {
  public $product; // shoppingCartProductEntity
  public $message; // giftMessageEntity
}

class catalogProductDownloadableLinkFileEntity {
  public $name; // string
  public $base64_content; // string
}

class catalogProductDownloadableLinkAddSampleEntity {
  public $type; // string
  public $file; // catalogProductDownloadableLinkFileEntity
  public $url; // string
}

class catalogProductDownloadableLinkAddEntity {
  public $title; // string
  public $price; // string
  public $is_unlimited; // int
  public $number_of_downloads; // int
  public $is_shareable; // int
  public $sample; // catalogProductDownloadableLinkAddSampleEntity
  public $type; // string
  public $file; // catalogProductDownloadableLinkFileEntity
  public $link_url; // string
  public $sample_url; // string
  public $sort_order; // int
}

class catalogProductDownloadableLinkFileInfoEntity {
  public $file; // string
  public $name; // string
  public $size; // int
  public $status; // string
}

class catalogProductDownloadableLinkEntity {
  public $link_id; // string
  public $title; // string
  public $price; // string
  public $number_of_downloads; // int
  public $is_unlimited; // int
  public $is_shareable; // int
  public $link_url; // string
  public $link_type; // string
  public $sample_file; // string
  public $sample_url; // string
  public $sample_type; // string
  public $sort_order; // int
  public $file_save; // catalogProductDownloadableLinkFileInfoEntityArray
  public $sample_file_save; // catalogProductDownloadableLinkFileInfoEntityArray
}

class catalogProductDownloadableLinkSampleEntity {
  public $sample_id; // string
  public $product_id; // string
  public $sample_file; // string
  public $sample_url; // string
  public $sample_type; // string
  public $sort_order; // string
  public $default_title; // string
  public $store_title; // string
  public $title; // string
}

class catalogProductDownloadableLinkInfoEntity {
  public $links; // catalogProductDownloadableLinkEntityArray
  public $samples; // catalogProductDownloadableLinkSampleEntityArray
}


/**
 * MagentoService class
 * 
 *  
 * 
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class MagentoService extends \SoapClient {

  private static $classmap = array(
                                    'anonymous0' => 'anonymous0',
                                    'arrayCoordinate' => 'arrayCoordinate',
                                    'Array' => 'Array',
                                    'Struct' => 'Struct',
                                    'base64' => 'base64',
                                    'duration' => 'duration',
                                    'dateTime' => 'dateTime',
                                    'NOTATION' => 'NOTATION',
                                    'time' => 'time',
                                    'date' => 'date',
                                    'gYearMonth' => 'gYearMonth',
                                    'gYear' => 'gYear',
                                    'gMonthDay' => 'gMonthDay',
                                    'gDay' => 'gDay',
                                    'gMonth' => 'gMonth',
                                    'boolean' => 'boolean',
                                    'base64Binary' => 'base64Binary',
                                    'hexBinary' => 'hexBinary',
                                    'float' => 'float',
                                    'double' => 'double',
                                    'anyURI' => 'anyURI',
                                    'QName' => 'QName',
                                    'string' => 'string',
                                    'normalizedString' => 'normalizedString',
                                    'token' => 'token',
                                    'language' => 'language',
                                    'Name' => 'Name',
                                    'NMTOKEN' => 'NMTOKEN',
                                    'NCName' => 'NCName',
                                    'NMTOKENS' => 'NMTOKENS',
                                    'ID' => 'ID',
                                    'IDREF' => 'IDREF',
                                    'ENTITY' => 'ENTITY',
                                    'IDREFS' => 'IDREFS',
                                    'ENTITIES' => 'ENTITIES',
                                    'decimal' => 'decimal',
                                    'integer' => 'integer',
                                    'nonPositiveInteger' => 'nonPositiveInteger',
                                    'negativeInteger' => 'negativeInteger',
                                    'long' => 'long',
                                    'int' => 'int',
                                    'short' => 'short',
                                    'byte' => 'byte',
                                    'nonNegativeInteger' => 'nonNegativeInteger',
                                    'unsignedLong' => 'unsignedLong',
                                    'unsignedInt' => 'unsignedInt',
                                    'unsignedShort' => 'unsignedShort',
                                    'unsignedByte' => 'unsignedByte',
                                    'positiveInteger' => 'positiveInteger',
                                    'associativeEntity' => 'associativeEntity',
                                    'associativeMultiEntity' => 'associativeMultiEntity',
                                    'filters' => 'filters',
                                    'complexFilter' => 'complexFilter',
                                    'apiMethodEntity' => 'apiMethodEntity',
                                    'apiEntity' => 'apiEntity',
                                    'existsFaltureEntity' => 'existsFaltureEntity',
                                    'storeEntity' => 'storeEntity',
                                    'magentoInfoEntity' => 'magentoInfoEntity',
                                    'directoryCountryEntity' => 'directoryCountryEntity',
                                    'directoryRegionEntity' => 'directoryRegionEntity',
                                    'customerCustomerEntityToCreate' => 'customerCustomerEntityToCreate',
                                    'customerCustomerEntity' => 'customerCustomerEntity',
                                    'customerGroupEntity' => 'customerGroupEntity',
                                    'customerAddressEntityCreate' => 'customerAddressEntityCreate',
                                    'customerAddressEntityItem' => 'customerAddressEntityItem',
                                    'catalogProductAdditionalAttributesEntity' => 'catalogProductAdditionalAttributesEntity',
                                    'catalogProductEntity' => 'catalogProductEntity',
                                    'catalogProductRequestAttributes' => 'catalogProductRequestAttributes',
                                    'catalogProductReturnEntity' => 'catalogProductReturnEntity',
                                    'catalogProductCreateEntity' => 'catalogProductCreateEntity',
                                    'catalogProductAttributeSetEntity' => 'catalogProductAttributeSetEntity',
                                    'catalogProductTypeEntity' => 'catalogProductTypeEntity',
                                    'catalogProductTierPriceEntity' => 'catalogProductTierPriceEntity',
                                    'catalogCategoryEntity' => 'catalogCategoryEntity',
                                    'catalogCategoryEntityNoChildren' => 'catalogCategoryEntityNoChildren',
                                    'catalogCategoryTree' => 'catalogCategoryTree',
                                    'catalogCategoryEntityCreate' => 'catalogCategoryEntityCreate',
                                    'catalogCategoryInfo' => 'catalogCategoryInfo',
                                    'catalogAssignedProduct' => 'catalogAssignedProduct',
                                    'catalogAttributeEntity' => 'catalogAttributeEntity',
                                    'catalogAttributeOptionEntity' => 'catalogAttributeOptionEntity',
                                    'catalogProductImageEntity' => 'catalogProductImageEntity',
                                    'catalogProductAttributeMediaTypeEntity' => 'catalogProductAttributeMediaTypeEntity',
                                    'catalogProductImageFileEntity' => 'catalogProductImageFileEntity',
                                    'catalogProductAttributeMediaCreateEntity' => 'catalogProductAttributeMediaCreateEntity',
                                    'catalogProductLinkEntity' => 'catalogProductLinkEntity',
                                    'catalogProductLinkAttributeEntity' => 'catalogProductLinkAttributeEntity',
                                    'catalogProductAttributeFrontendLabelEntity' => 'catalogProductAttributeFrontendLabelEntity',
                                    'catalogProductAttributeEntityToCreate' => 'catalogProductAttributeEntityToCreate',
                                    'catalogProductAttributeEntityToUpdate' => 'catalogProductAttributeEntityToUpdate',
                                    'catalogProductAttributeEntity' => 'catalogProductAttributeEntity',
                                    'catalogProductAttributeOptionLabelEntity' => 'catalogProductAttributeOptionLabelEntity',
                                    'catalogProductAttributeOptionEntityToAdd' => 'catalogProductAttributeOptionEntityToAdd',
                                    'catalogProductCustomOptionAdditionalFieldsEntity' => 'catalogProductCustomOptionAdditionalFieldsEntity',
                                    'catalogProductCustomOptionToAdd' => 'catalogProductCustomOptionToAdd',
                                    'catalogProductCustomOptionToUpdate' => 'catalogProductCustomOptionToUpdate',
                                    'catalogProductCustomOptionInfoEntity' => 'catalogProductCustomOptionInfoEntity',
                                    'catalogProductCustomOptionListEntity' => 'catalogProductCustomOptionListEntity',
                                    'catalogProductCustomOptionTypesEntity' => 'catalogProductCustomOptionTypesEntity',
                                    'catalogProductCustomOptionValueInfoEntity' => 'catalogProductCustomOptionValueInfoEntity',
                                    'catalogProductCustomOptionValueListEntity' => 'catalogProductCustomOptionValueListEntity',
                                    'catalogProductCustomOptionValueAddEntity' => 'catalogProductCustomOptionValueAddEntity',
                                    'catalogProductCustomOptionValueUpdateEntity' => 'catalogProductCustomOptionValueUpdateEntity',
                                    'catalogProductSpecialPriceReturnEntity' => 'catalogProductSpecialPriceReturnEntity',
                                    'salesOrderEntity' => 'salesOrderEntity',
                                    'salesOrderListEntity' => 'salesOrderListEntity',
                                    'salesOrderAddressEntity' => 'salesOrderAddressEntity',
                                    'salesOrderItemEntity' => 'salesOrderItemEntity',
                                    'orderItemIdQty' => 'orderItemIdQty',
                                    'salesOrderPaymentEntity' => 'salesOrderPaymentEntity',
                                    'salesOrderStatusHistoryEntity' => 'salesOrderStatusHistoryEntity',
                                    'salesOrderShipmentEntity' => 'salesOrderShipmentEntity',
                                    'salesOrderShipmentCommentEntity' => 'salesOrderShipmentCommentEntity',
                                    'salesOrderShipmentTrackEntity' => 'salesOrderShipmentTrackEntity',
                                    'salesOrderShipmentItemEntity' => 'salesOrderShipmentItemEntity',
                                    'salesOrderInvoiceEntity' => 'salesOrderInvoiceEntity',
                                    'salesOrderInvoiceItemEntity' => 'salesOrderInvoiceItemEntity',
                                    'salesOrderInvoiceCommentEntity' => 'salesOrderInvoiceCommentEntity',
                                    'salesOrderCreditmemoEntity' => 'salesOrderCreditmemoEntity',
                                    'salesOrderCreditmemoItemEntity' => 'salesOrderCreditmemoItemEntity',
                                    'salesOrderCreditmemoCommentEntity' => 'salesOrderCreditmemoCommentEntity',
                                    'salesOrderCreditmemoData' => 'salesOrderCreditmemoData',
                                    'catalogInventoryStockItemEntity' => 'catalogInventoryStockItemEntity',
                                    'catalogInventoryStockItemUpdateEntity' => 'catalogInventoryStockItemUpdateEntity',
                                    'shoppingCartAddressEntity' => 'shoppingCartAddressEntity',
                                    'shoppingCartItemEntity' => 'shoppingCartItemEntity',
                                    'shoppingCartPaymentEntity' => 'shoppingCartPaymentEntity',
                                    'shoppingCartInfoEntity' => 'shoppingCartInfoEntity',
                                    'shoppingCartTotalsEntity' => 'shoppingCartTotalsEntity',
                                    'shoppingCartLicenseEntity' => 'shoppingCartLicenseEntity',
                                    'shoppingCartProductEntity' => 'shoppingCartProductEntity',
                                    'shoppingCartCustomerEntity' => 'shoppingCartCustomerEntity',
                                    'shoppingCartCustomerAddressEntity' => 'shoppingCartCustomerAddressEntity',
                                    'shoppingCartShippingMethodEntity' => 'shoppingCartShippingMethodEntity',
                                    'shoppingCartPaymentMethodEntity' => 'shoppingCartPaymentMethodEntity',
                                    'shoppingCartPaymentMethodResponseEntity' => 'shoppingCartPaymentMethodResponseEntity',
                                    'catalogProductTagListEntity' => 'catalogProductTagListEntity',
                                    'catalogProductTagAddEntity' => 'catalogProductTagAddEntity',
                                    'catalogProductTagUpdateEntity' => 'catalogProductTagUpdateEntity',
                                    'catalogProductTagInfoEntity' => 'catalogProductTagInfoEntity',
                                    'giftMessageEntity' => 'giftMessageEntity',
                                    'giftMessageResponse' => 'giftMessageResponse',
                                    'giftMessageAssociativeProductsEntity' => 'giftMessageAssociativeProductsEntity',
                                    'catalogProductDownloadableLinkFileEntity' => 'catalogProductDownloadableLinkFileEntity',
                                    'catalogProductDownloadableLinkAddSampleEntity' => 'catalogProductDownloadableLinkAddSampleEntity',
                                    'catalogProductDownloadableLinkAddEntity' => 'catalogProductDownloadableLinkAddEntity',
                                    'catalogProductDownloadableLinkFileInfoEntity' => 'catalogProductDownloadableLinkFileInfoEntity',
                                    'catalogProductDownloadableLinkEntity' => 'catalogProductDownloadableLinkEntity',
                                    'catalogProductDownloadableLinkSampleEntity' => 'catalogProductDownloadableLinkSampleEntity',
                                    'catalogProductDownloadableLinkInfoEntity' => 'catalogProductDownloadableLinkInfoEntity',
                                   );

  public function MagentoService($wsdl = "http://serveronix:8080/magento/api/v2_soap/?wsdl", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    parent::__construct($wsdl, $options);
  }

  /**
   * End web service session 
   *
   * @param string $sessionId
   * @return boolean
   */
  public function endSession($sessionId) {
    return $this->__soapCall('endSession', array($sessionId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Login user and retrive session id 
   *
   * @param string $username
   * @param string $apiKey
   * @return string
   */
  public function login($username, $apiKey) {
    return $this->__soapCall('login', array($username, $apiKey),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Start web service session 
   *
   * @param  
   * @return string
   */
  public function startSession() {
    return $this->__soapCall('startSession', array(),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * List of available resources 
   *
   * @param string $sessionId
   * @return ArrayOfApis
   */
  public function resources($sessionId) {
    return $this->__soapCall('resources', array($sessionId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * List of global faults 
   *
   * @param string $sessionId
   * @return ArrayOfExistsFaltures
   */
  public function globalFaults($sessionId) {
    return $this->__soapCall('globalFaults', array($sessionId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * List of resource faults 
   *
   * @param string $resourceName
   * @param string $sessionId
   * @return ArrayOfExistsFaltures
   */
  public function resourceFaults($resourceName, $sessionId) {
    return $this->__soapCall('resourceFaults', array($resourceName, $sessionId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * List of stores 
   *
   * @param string $sessionId
   * @return storeEntityArray
   */
  public function storeList($sessionId) {
    return $this->__soapCall('storeList', array($sessionId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Store view info 
   *
   * @param string $sessionId
   * @param string $storeId
   * @return storeEntity
   */
  public function storeInfo($sessionId, $storeId) {
    return $this->__soapCall('storeInfo', array($sessionId, $storeId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Info about current Magento installation 
   *
   * @param string $sessionId
   * @return magentoInfoEntity
   */
  public function magentoInfo($sessionId) {
    return $this->__soapCall('magentoInfo', array($sessionId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * List of countries 
   *
   * @param string $sessionId
   * @return directoryCountryEntityArray
   */
  public function directoryCountryList($sessionId) {
    return $this->__soapCall('directoryCountryList', array($sessionId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * List of regions in specified country 
   *
   * @param string $sessionId
   * @param string $country
   * @return directoryRegionEntityArray
   */
  public function directoryRegionList($sessionId, $country) {
    return $this->__soapCall('directoryRegionList', array($sessionId, $country),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve customers 
   *
   * @param string $sessionId
   * @param filters $filters
   * @return customerCustomerEntityArray
   */
  public function customerCustomerList($sessionId, filters $filters) {
    return $this->__soapCall('customerCustomerList', array($sessionId, $filters),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Create customer 
   *
   * @param string $sessionId
   * @param customerCustomerEntityToCreate $customerData
   * @return int
   */
  public function customerCustomerCreate($sessionId, customerCustomerEntityToCreate $customerData) {
    return $this->__soapCall('customerCustomerCreate', array($sessionId, $customerData),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve customer data 
   *
   * @param string $sessionId
   * @param int $customerId
   * @param ArrayOfString $attributes
   * @return customerCustomerEntity
   */
  public function customerCustomerInfo($sessionId, $customerId, $attributes) {
    return $this->__soapCall('customerCustomerInfo', array($sessionId, $customerId, $attributes),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Update customer data 
   *
   * @param string $sessionId
   * @param int $customerId
   * @param customerCustomerEntityToCreate $customerData
   * @return boolean
   */
  public function customerCustomerUpdate($sessionId, $customerId, customerCustomerEntityToCreate $customerData) {
    return $this->__soapCall('customerCustomerUpdate', array($sessionId, $customerId, $customerData),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Delete customer 
   *
   * @param string $sessionId
   * @param int $customerId
   * @return boolean
   */
  public function customerCustomerDelete($sessionId, $customerId) {
    return $this->__soapCall('customerCustomerDelete', array($sessionId, $customerId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve customer groups 
   *
   * @param string $sessionId
   * @return customerGroupEntityArray
   */
  public function customerGroupList($sessionId) {
    return $this->__soapCall('customerGroupList', array($sessionId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve customer addresses 
   *
   * @param string $sessionId
   * @param int $customerId
   * @return customerAddressEntityArray
   */
  public function customerAddressList($sessionId, $customerId) {
    return $this->__soapCall('customerAddressList', array($sessionId, $customerId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Create customer address 
   *
   * @param string $sessionId
   * @param int $customerId
   * @param customerAddressEntityCreate $addressData
   * @return int
   */
  public function customerAddressCreate($sessionId, $customerId, customerAddressEntityCreate $addressData) {
    return $this->__soapCall('customerAddressCreate', array($sessionId, $customerId, $addressData),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve customer address data 
   *
   * @param string $sessionId
   * @param int $addressId
   * @return customerAddressEntityItem
   */
  public function customerAddressInfo($sessionId, $addressId) {
    return $this->__soapCall('customerAddressInfo', array($sessionId, $addressId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Update customer address data 
   *
   * @param string $sessionId
   * @param int $addressId
   * @param customerAddressEntityCreate $addressData
   * @return boolean
   */
  public function customerAddressUpdate($sessionId, $addressId, customerAddressEntityCreate $addressData) {
    return $this->__soapCall('customerAddressUpdate', array($sessionId, $addressId, $addressData),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Delete customer address 
   *
   * @param string $sessionId
   * @param int $addressId
   * @return boolean
   */
  public function customerAddressDelete($sessionId, $addressId) {
    return $this->__soapCall('customerAddressDelete', array($sessionId, $addressId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Set_Get current store view 
   *
   * @param string $sessionId
   * @param string $storeView
   * @return int
   */
  public function catalogCategoryCurrentStore($sessionId, $storeView) {
    return $this->__soapCall('catalogCategoryCurrentStore', array($sessionId, $storeView),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve hierarchical tree of categories. 
   *
   * @param string $sessionId
   * @param string $parentId
   * @param string $storeView
   * @return catalogCategoryTree
   */
  public function catalogCategoryTree($sessionId, $parentId, $storeView) {
    return $this->__soapCall('catalogCategoryTree', array($sessionId, $parentId, $storeView),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve hierarchical tree of categories. 
   *
   * @param string $sessionId
   * @param string $website
   * @param string $storeView
   * @param string $parentCategory
   * @return ArrayOfCatalogCategoryEntitiesNoChildren
   */
  public function catalogCategoryLevel($sessionId, $website, $storeView, $parentCategory) {
    return $this->__soapCall('catalogCategoryLevel', array($sessionId, $website, $storeView, $parentCategory),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve hierarchical tree of categories. 
   *
   * @param string $sessionId
   * @param int $categoryId
   * @param string $storeView
   * @param ArrayOfString $attributes
   * @return catalogCategoryInfo
   */
  public function catalogCategoryInfo($sessionId, $categoryId, $storeView, $attributes) {
    return $this->__soapCall('catalogCategoryInfo', array($sessionId, $categoryId, $storeView, $attributes),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Create new category and return its id. 
   *
   * @param string $sessionId
   * @param int $parentId
   * @param catalogCategoryEntityCreate $categoryData
   * @param string $storeView
   * @return int
   */
  public function catalogCategoryCreate($sessionId, $parentId, catalogCategoryEntityCreate $categoryData, $storeView) {
    return $this->__soapCall('catalogCategoryCreate', array($sessionId, $parentId, $categoryData, $storeView),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Update category 
   *
   * @param string $sessionId
   * @param int $categoryId
   * @param catalogCategoryEntityCreate $categoryData
   * @param string $storeView
   * @return boolean
   */
  public function catalogCategoryUpdate($sessionId, $categoryId, catalogCategoryEntityCreate $categoryData, $storeView) {
    return $this->__soapCall('catalogCategoryUpdate', array($sessionId, $categoryId, $categoryData, $storeView),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Move category in tree 
   *
   * @param string $sessionId
   * @param int $categoryId
   * @param int $parentId
   * @param string $afterId
   * @return boolean
   */
  public function catalogCategoryMove($sessionId, $categoryId, $parentId, $afterId) {
    return $this->__soapCall('catalogCategoryMove', array($sessionId, $categoryId, $parentId, $afterId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Delete category 
   *
   * @param string $sessionId
   * @param int $categoryId
   * @return boolean
   */
  public function catalogCategoryDelete($sessionId, $categoryId) {
    return $this->__soapCall('catalogCategoryDelete', array($sessionId, $categoryId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve list of assigned products 
   *
   * @param string $sessionId
   * @param int $categoryId
   * @return catalogAssignedProductArray
   */
  public function catalogCategoryAssignedProducts($sessionId, $categoryId) {
    return $this->__soapCall('catalogCategoryAssignedProducts', array($sessionId, $categoryId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Assign product to category 
   *
   * @param string $sessionId
   * @param int $categoryId
   * @param string $product
   * @param string $position
   * @param string $identifierType
   * @return boolean
   */
  public function catalogCategoryAssignProduct($sessionId, $categoryId, $product, $position, $identifierType) {
    return $this->__soapCall('catalogCategoryAssignProduct', array($sessionId, $categoryId, $product, $position, $identifierType),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Update assigned product 
   *
   * @param string $sessionId
   * @param int $categoryId
   * @param string $product
   * @param string $position
   * @param string $identifierType
   * @return boolean
   */
  public function catalogCategoryUpdateProduct($sessionId, $categoryId, $product, $position, $identifierType) {
    return $this->__soapCall('catalogCategoryUpdateProduct', array($sessionId, $categoryId, $product, $position, $identifierType),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Remove product assignment from category 
   *
   * @param string $sessionId
   * @param int $categoryId
   * @param string $product
   * @param string $identifierType
   * @return boolean
   */
  public function catalogCategoryRemoveProduct($sessionId, $categoryId, $product, $identifierType) {
    return $this->__soapCall('catalogCategoryRemoveProduct', array($sessionId, $categoryId, $product, $identifierType),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Set/Get current store view 
   *
   * @param string $sessionId
   * @param string $storeView
   * @return int
   */
  public function catalogProductCurrentStore($sessionId, $storeView) {
    return $this->__soapCall('catalogProductCurrentStore', array($sessionId, $storeView),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Get list of additional attributes which are not in default create/update list 
   *
   * @param string $sessionId
   * @param string $productType
   * @param string $attributeSetId
   * @return catalogAttributeEntityArray
   */
  public function catalogProductListOfAdditionalAttributes($sessionId, $productType, $attributeSetId) {
    return $this->__soapCall('catalogProductListOfAdditionalAttributes', array($sessionId, $productType, $attributeSetId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve products list by filters 
   *
   * @param string $sessionId
   * @param filters $filters
   * @param string $storeView
   * @return catalogProductEntityArray
   */
  public function catalogProductList($sessionId, filters $filters, $storeView) {
    return $this->__soapCall('catalogProductList', array($sessionId, $filters, $storeView),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve product 
   *
   * @param string $sessionId
   * @param string $productId
   * @param string $storeView
   * @param catalogProductRequestAttributes $attributes
   * @param string $identifierType
   * @return catalogProductReturnEntity
   */
  public function catalogProductInfo($sessionId, $productId, $storeView, catalogProductRequestAttributes $attributes, $identifierType) {
    return $this->__soapCall('catalogProductInfo', array($sessionId, $productId, $storeView, $attributes, $identifierType),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Create new product and return product id 
   *
   * @param string $sessionId
   * @param string $type
   * @param string $set
   * @param string $sku
   * @param catalogProductCreateEntity $productData
   * @param string $storeView
   * @return int
   */
  public function catalogProductCreate($sessionId, $type, $set, $sku, catalogProductCreateEntity $productData, $storeView) {
    return $this->__soapCall('catalogProductCreate', array($sessionId, $type, $set, $sku, $productData, $storeView),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Update product 
   *
   * @param string $sessionId
   * @param string $product
   * @param catalogProductCreateEntity $productData
   * @param string $storeView
   * @param string $identifierType
   * @return boolean
   */
  public function catalogProductUpdate($sessionId, $product, catalogProductCreateEntity $productData, $storeView, $identifierType) {
    return $this->__soapCall('catalogProductUpdate', array($sessionId, $product, $productData, $storeView, $identifierType),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Product multi update 
   *
   * @param string $sessionId
   * @param ArrayOfString $productIds
   * @param catalogProductCreateEntityArray $productData
   * @param string $store
   * @param string $identifierType
   * @return boolean
   */
  public function catalogProductMultiUpdate($sessionId, $productIds, catalogProductCreateEntityArray $productData, $store, $identifierType) {
    return $this->__soapCall('catalogProductMultiUpdate', array($sessionId, $productIds, $productData, $store, $identifierType),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Update product special price 
   *
   * @param string $sessionId
   * @param string $product
   * @param string $specialPrice
   * @param string $fromDate
   * @param string $toDate
   * @param string $storeView
   * @param string $identifierType
   * @return int
   */
  public function catalogProductSetSpecialPrice($sessionId, $product, $specialPrice, $fromDate, $toDate, $storeView, $identifierType) {
    return $this->__soapCall('catalogProductSetSpecialPrice', array($sessionId, $product, $specialPrice, $fromDate, $toDate, $storeView, $identifierType),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Get product special price data 
   *
   * @param string $sessionId
   * @param string $product
   * @param string $storeView
   * @param string $identifierType
   * @return catalogProductSpecialPriceReturnEntity
   */
  public function catalogProductGetSpecialPrice($sessionId, $product, $storeView, $identifierType) {
    return $this->__soapCall('catalogProductGetSpecialPrice', array($sessionId, $product, $storeView, $identifierType),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Delete product 
   *
   * @param string $sessionId
   * @param string $product
   * @param string $identifierType
   * @return int
   */
  public function catalogProductDelete($sessionId, $product, $identifierType) {
    return $this->__soapCall('catalogProductDelete', array($sessionId, $product, $identifierType),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Set/Get current store view 
   *
   * @param string $sessionId
   * @param string $storeView
   * @return int
   */
  public function catalogProductAttributeCurrentStore($sessionId, $storeView) {
    return $this->__soapCall('catalogProductAttributeCurrentStore', array($sessionId, $storeView),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Create product attribute set based on another set 
   *
   * @param string $sessionId
   * @param string $attributeSetName
   * @param string $skeletonSetId
   * @return int
   */
  public function catalogProductAttributeSetCreate($sessionId, $attributeSetName, $skeletonSetId) {
    return $this->__soapCall('catalogProductAttributeSetCreate', array($sessionId, $attributeSetName, $skeletonSetId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve attribute list 
   *
   * @param string $sessionId
   * @param int $setId
   * @return catalogAttributeEntityArray
   */
  public function catalogProductAttributeList($sessionId, $setId) {
    return $this->__soapCall('catalogProductAttributeList', array($sessionId, $setId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve attribute options 
   *
   * @param string $sessionId
   * @param string $attributeId
   * @param string $storeView
   * @return catalogAttributeOptionEntityArray
   */
  public function catalogProductAttributeOptions($sessionId, $attributeId, $storeView) {
    return $this->__soapCall('catalogProductAttributeOptions', array($sessionId, $attributeId, $storeView),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Remove product attribute set 
   *
   * @param string $sessionId
   * @param string $attributeSetId
   * @param string $forceProductsRemove
   * @return boolean
   */
  public function catalogProductAttributeSetRemove($sessionId, $attributeSetId, $forceProductsRemove) {
    return $this->__soapCall('catalogProductAttributeSetRemove', array($sessionId, $attributeSetId, $forceProductsRemove),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve product attribute sets 
   *
   * @param string $sessionId
   * @return catalogProductAttributeSetEntityArray
   */
  public function catalogProductAttributeSetList($sessionId) {
    return $this->__soapCall('catalogProductAttributeSetList', array($sessionId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Add attribute into attribute set 
   *
   * @param string $sessionId
   * @param string $attributeId
   * @param string $attributeSetId
   * @param string $attributeGroupId
   * @param string $sortOrder
   * @return boolean
   */
  public function catalogProductAttributeSetAttributeAdd($sessionId, $attributeId, $attributeSetId, $attributeGroupId, $sortOrder) {
    return $this->__soapCall('catalogProductAttributeSetAttributeAdd', array($sessionId, $attributeId, $attributeSetId, $attributeGroupId, $sortOrder),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Remove attribute from attribute set 
   *
   * @param string $sessionId
   * @param string $attributeId
   * @param string $attributeSetId
   * @return boolean
   */
  public function catalogProductAttributeSetAttributeRemove($sessionId, $attributeId, $attributeSetId) {
    return $this->__soapCall('catalogProductAttributeSetAttributeRemove', array($sessionId, $attributeId, $attributeSetId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Create group within existing attribute set 
   *
   * @param string $sessionId
   * @param string $attributeSetId
   * @param string $groupName
   * @return int
   */
  public function catalogProductAttributeSetGroupAdd($sessionId, $attributeSetId, $groupName) {
    return $this->__soapCall('catalogProductAttributeSetGroupAdd', array($sessionId, $attributeSetId, $groupName),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Rename existing group 
   *
   * @param string $sessionId
   * @param string $groupId
   * @param string $groupName
   * @return boolean
   */
  public function catalogProductAttributeSetGroupRename($sessionId, $groupId, $groupName) {
    return $this->__soapCall('catalogProductAttributeSetGroupRename', array($sessionId, $groupId, $groupName),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Remove group from attribute set 
   *
   * @param string $sessionId
   * @param string $attributeGroupId
   * @return boolean
   */
  public function catalogProductAttributeSetGroupRemove($sessionId, $attributeGroupId) {
    return $this->__soapCall('catalogProductAttributeSetGroupRemove', array($sessionId, $attributeGroupId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Get list of possible attribute types 
   *
   * @param string $sessionId
   * @return catalogAttributeOptionEntityArray
   */
  public function catalogProductAttributeTypes($sessionId) {
    return $this->__soapCall('catalogProductAttributeTypes', array($sessionId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Create new attribute 
   *
   * @param string $sessionId
   * @param catalogProductAttributeEntityToCreate $data
   * @return int
   */
  public function catalogProductAttributeCreate($sessionId, catalogProductAttributeEntityToCreate $data) {
    return $this->__soapCall('catalogProductAttributeCreate', array($sessionId, $data),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Set/Get current store view 
   *
   * @param string $sessionId
   * @param string $storeView
   * @return int
   */
  public function catalogCategoryAttributeCurrentStore($sessionId, $storeView) {
    return $this->__soapCall('catalogCategoryAttributeCurrentStore', array($sessionId, $storeView),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Set/Get current store view 
   *
   * @param string $sessionId
   * @param string $storeView
   * @return int
   */
  public function catalogProductAttributeMediaCurrentStore($sessionId, $storeView) {
    return $this->__soapCall('catalogProductAttributeMediaCurrentStore', array($sessionId, $storeView),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Delete attribute 
   *
   * @param string $sessionId
   * @param string $attribute
   * @return boolean
   */
  public function catalogProductAttributeRemove($sessionId, $attribute) {
    return $this->__soapCall('catalogProductAttributeRemove', array($sessionId, $attribute),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Get full information about attribute with list of options 
   *
   * @param string $sessionId
   * @param string $attribute
   * @return catalogProductAttributeEntity
   */
  public function catalogProductAttributeInfo($sessionId, $attribute) {
    return $this->__soapCall('catalogProductAttributeInfo', array($sessionId, $attribute),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Update attribute 
   *
   * @param string $sessionId
   * @param string $attribute
   * @param catalogProductAttributeEntityToUpdate $data
   * @return boolean
   */
  public function catalogProductAttributeUpdate($sessionId, $attribute, catalogProductAttributeEntityToUpdate $data) {
    return $this->__soapCall('catalogProductAttributeUpdate', array($sessionId, $attribute, $data),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Add option to attribute 
   *
   * @param string $sessionId
   * @param string $attribute
   * @param catalogProductAttributeOptionEntityToAdd $data
   * @return boolean
   */
  public function catalogProductAttributeAddOption($sessionId, $attribute, catalogProductAttributeOptionEntityToAdd $data) {
    return $this->__soapCall('catalogProductAttributeAddOption', array($sessionId, $attribute, $data),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Remove option from attribute 
   *
   * @param string $sessionId
   * @param string $attribute
   * @param string $optionId
   * @return boolean
   */
  public function catalogProductAttributeRemoveOption($sessionId, $attribute, $optionId) {
    return $this->__soapCall('catalogProductAttributeRemoveOption', array($sessionId, $attribute, $optionId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve product types 
   *
   * @param string $sessionId
   * @return catalogProductTypeEntityArray
   */
  public function catalogProductTypeList($sessionId) {
    return $this->__soapCall('catalogProductTypeList', array($sessionId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve product tier prices 
   *
   * @param string $sessionId
   * @param string $product
   * @param string $identifierType
   * @return catalogProductTierPriceEntityArray
   */
  public function catalogProductAttributeTierPriceInfo($sessionId, $product, $identifierType) {
    return $this->__soapCall('catalogProductAttributeTierPriceInfo', array($sessionId, $product, $identifierType),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Update product tier prices 
   *
   * @param string $sessionId
   * @param string $product
   * @param catalogProductTierPriceEntityArray $tier_price
   * @param string $identifierType
   * @return int
   */
  public function catalogProductAttributeTierPriceUpdate($sessionId, $product, catalogProductTierPriceEntityArray $tier_price, $identifierType) {
    return $this->__soapCall('catalogProductAttributeTierPriceUpdate', array($sessionId, $product, $tier_price, $identifierType),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve category attributes 
   *
   * @param string $sessionId
   * @return catalogAttributeEntityArray
   */
  public function catalogCategoryAttributeList($sessionId) {
    return $this->__soapCall('catalogCategoryAttributeList', array($sessionId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve attribute options 
   *
   * @param string $sessionId
   * @param string $attributeId
   * @param string $storeView
   * @return catalogAttributeOptionEntityArray
   */
  public function catalogCategoryAttributeOptions($sessionId, $attributeId, $storeView) {
    return $this->__soapCall('catalogCategoryAttributeOptions', array($sessionId, $attributeId, $storeView),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve product image list 
   *
   * @param string $sessionId
   * @param string $product
   * @param string $storeView
   * @param string $identifierType
   * @return catalogProductImageEntityArray
   */
  public function catalogProductAttributeMediaList($sessionId, $product, $storeView, $identifierType) {
    return $this->__soapCall('catalogProductAttributeMediaList', array($sessionId, $product, $storeView, $identifierType),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve product image data 
   *
   * @param string $sessionId
   * @param string $product
   * @param string $file
   * @param string $storeView
   * @param string $identifierType
   * @return catalogProductImageEntity
   */
  public function catalogProductAttributeMediaInfo($sessionId, $product, $file, $storeView, $identifierType) {
    return $this->__soapCall('catalogProductAttributeMediaInfo', array($sessionId, $product, $file, $storeView, $identifierType),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve product image types 
   *
   * @param string $sessionId
   * @param string $setId
   * @return catalogProductAttributeMediaTypeEntityArray
   */
  public function catalogProductAttributeMediaTypes($sessionId, $setId) {
    return $this->__soapCall('catalogProductAttributeMediaTypes', array($sessionId, $setId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Upload new product image 
   *
   * @param string $sessionId
   * @param string $product
   * @param catalogProductAttributeMediaCreateEntity $data
   * @param string $storeView
   * @param string $identifierType
   * @return string
   */
  public function catalogProductAttributeMediaCreate($sessionId, $product, catalogProductAttributeMediaCreateEntity $data, $storeView, $identifierType) {
    return $this->__soapCall('catalogProductAttributeMediaCreate', array($sessionId, $product, $data, $storeView, $identifierType),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Update product image 
   *
   * @param string $sessionId
   * @param string $product
   * @param string $file
   * @param catalogProductAttributeMediaCreateEntity $data
   * @param string $storeView
   * @param string $identifierType
   * @return boolean
   */
  public function catalogProductAttributeMediaUpdate($sessionId, $product, $file, catalogProductAttributeMediaCreateEntity $data, $storeView, $identifierType) {
    return $this->__soapCall('catalogProductAttributeMediaUpdate', array($sessionId, $product, $file, $data, $storeView, $identifierType),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Remove product image 
   *
   * @param string $sessionId
   * @param string $product
   * @param string $file
   * @param string $identifierType
   * @return boolean
   */
  public function catalogProductAttributeMediaRemove($sessionId, $product, $file, $identifierType) {
    return $this->__soapCall('catalogProductAttributeMediaRemove', array($sessionId, $product, $file, $identifierType),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve linked products 
   *
   * @param string $sessionId
   * @param string $type
   * @param string $product
   * @param string $identifierType
   * @return catalogProductLinkEntityArray
   */
  public function catalogProductLinkList($sessionId, $type, $product, $identifierType) {
    return $this->__soapCall('catalogProductLinkList', array($sessionId, $type, $product, $identifierType),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Assign product link 
   *
   * @param string $sessionId
   * @param string $type
   * @param string $product
   * @param string $linkedProduct
   * @param catalogProductLinkEntity $data
   * @param string $identifierType
   * @return boolean
   */
  public function catalogProductLinkAssign($sessionId, $type, $product, $linkedProduct, catalogProductLinkEntity $data, $identifierType) {
    return $this->__soapCall('catalogProductLinkAssign', array($sessionId, $type, $product, $linkedProduct, $data, $identifierType),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Update product link 
   *
   * @param string $sessionId
   * @param string $type
   * @param string $product
   * @param string $linkedProduct
   * @param catalogProductLinkEntity $data
   * @param string $identifierType
   * @return boolean
   */
  public function catalogProductLinkUpdate($sessionId, $type, $product, $linkedProduct, catalogProductLinkEntity $data, $identifierType) {
    return $this->__soapCall('catalogProductLinkUpdate', array($sessionId, $type, $product, $linkedProduct, $data, $identifierType),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Remove product link 
   *
   * @param string $sessionId
   * @param string $type
   * @param string $product
   * @param string $linkedProduct
   * @param string $identifierType
   * @return boolean
   */
  public function catalogProductLinkRemove($sessionId, $type, $product, $linkedProduct, $identifierType) {
    return $this->__soapCall('catalogProductLinkRemove', array($sessionId, $type, $product, $linkedProduct, $identifierType),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve product link types 
   *
   * @param string $sessionId
   * @return ArrayOfString
   */
  public function catalogProductLinkTypes($sessionId) {
    return $this->__soapCall('catalogProductLinkTypes', array($sessionId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve product link type attributes 
   *
   * @param string $sessionId
   * @param string $type
   * @return catalogProductLinkAttributeEntityArray
   */
  public function catalogProductLinkAttributes($sessionId, $type) {
    return $this->__soapCall('catalogProductLinkAttributes', array($sessionId, $type),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Add new custom option into product 
   *
   * @param string $sessionId
   * @param string $productId
   * @param catalogProductCustomOptionToAdd $data
   * @param string $store
   * @return boolean
   */
  public function catalogProductCustomOptionAdd($sessionId, $productId, catalogProductCustomOptionToAdd $data, $store) {
    return $this->__soapCall('catalogProductCustomOptionAdd', array($sessionId, $productId, $data, $store),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Update product custom option 
   *
   * @param string $sessionId
   * @param string $optionId
   * @param catalogProductCustomOptionToUpdate $data
   * @param string $store
   * @return boolean
   */
  public function catalogProductCustomOptionUpdate($sessionId, $optionId, catalogProductCustomOptionToUpdate $data, $store) {
    return $this->__soapCall('catalogProductCustomOptionUpdate', array($sessionId, $optionId, $data, $store),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Get full information about custom option in product 
   *
   * @param string $sessionId
   * @param string $optionId
   * @param string $store
   * @return catalogProductCustomOptionInfoEntity
   */
  public function catalogProductCustomOptionInfo($sessionId, $optionId, $store) {
    return $this->__soapCall('catalogProductCustomOptionInfo', array($sessionId, $optionId, $store),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Get list of available custom option types 
   *
   * @param string $sessionId
   * @return catalogProductCustomOptionTypesArray
   */
  public function catalogProductCustomOptionTypes($sessionId) {
    return $this->__soapCall('catalogProductCustomOptionTypes', array($sessionId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve custom option value info 
   *
   * @param string $sessionId
   * @param string $valueId
   * @param string $store
   * @return catalogProductCustomOptionValueInfoEntity
   */
  public function catalogProductCustomOptionValueInfo($sessionId, $valueId, $store) {
    return $this->__soapCall('catalogProductCustomOptionValueInfo', array($sessionId, $valueId, $store),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve custom option values list 
   *
   * @param string $sessionId
   * @param string $optionId
   * @param string $store
   * @return catalogProductCustomOptionValueListArray
   */
  public function catalogProductCustomOptionValueList($sessionId, $optionId, $store) {
    return $this->__soapCall('catalogProductCustomOptionValueList', array($sessionId, $optionId, $store),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Add new custom option values 
   *
   * @param string $sessionId
   * @param string $optionId
   * @param catalogProductCustomOptionValueAddArray $data
   * @param string $store
   * @return boolean
   */
  public function catalogProductCustomOptionValueAdd($sessionId, $optionId, catalogProductCustomOptionValueAddArray $data, $store) {
    return $this->__soapCall('catalogProductCustomOptionValueAdd', array($sessionId, $optionId, $data, $store),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Update custom option value 
   *
   * @param string $sessionId
   * @param string $valueId
   * @param catalogProductCustomOptionValueUpdateEntity $data
   * @param string $storeId
   * @return boolean
   */
  public function catalogProductCustomOptionValueUpdate($sessionId, $valueId, catalogProductCustomOptionValueUpdateEntity $data, $storeId) {
    return $this->__soapCall('catalogProductCustomOptionValueUpdate', array($sessionId, $valueId, $data, $storeId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Remove value from custom option 
   *
   * @param string $sessionId
   * @param string $valueId
   * @return boolean
   */
  public function catalogProductCustomOptionValueRemove($sessionId, $valueId) {
    return $this->__soapCall('catalogProductCustomOptionValueRemove', array($sessionId, $valueId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve list of product custom options 
   *
   * @param string $sessionId
   * @param string $productId
   * @param string $store
   * @return catalogProductCustomOptionListArray
   */
  public function catalogProductCustomOptionList($sessionId, $productId, $store) {
    return $this->__soapCall('catalogProductCustomOptionList', array($sessionId, $productId, $store),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Remove custom option 
   *
   * @param string $sessionId
   * @param string $optionId
   * @return boolean
   */
  public function catalogProductCustomOptionRemove($sessionId, $optionId) {
    return $this->__soapCall('catalogProductCustomOptionRemove', array($sessionId, $optionId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve list of orders by filters 
   *
   * @param string $sessionId
   * @param filters $filters
   * @return salesOrderListEntityArray
   */
  public function salesOrderList($sessionId, filters $filters) {
    return $this->__soapCall('salesOrderList', array($sessionId, $filters),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve order information 
   *
   * @param string $sessionId
   * @param string $orderIncrementId
   * @return salesOrderEntity
   */
  public function salesOrderInfo($sessionId, $orderIncrementId) {
    return $this->__soapCall('salesOrderInfo', array($sessionId, $orderIncrementId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Add comment to order 
   *
   * @param string $sessionId
   * @param string $orderIncrementId
   * @param string $status
   * @param string $comment
   * @param string $notify
   * @return boolean
   */
  public function salesOrderAddComment($sessionId, $orderIncrementId, $status, $comment, $notify) {
    return $this->__soapCall('salesOrderAddComment', array($sessionId, $orderIncrementId, $status, $comment, $notify),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Hold order 
   *
   * @param string $sessionId
   * @param string $orderIncrementId
   * @return boolean
   */
  public function salesOrderHold($sessionId, $orderIncrementId) {
    return $this->__soapCall('salesOrderHold', array($sessionId, $orderIncrementId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Unhold order 
   *
   * @param string $sessionId
   * @param string $orderIncrementId
   * @return boolean
   */
  public function salesOrderUnhold($sessionId, $orderIncrementId) {
    return $this->__soapCall('salesOrderUnhold', array($sessionId, $orderIncrementId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Cancel order 
   *
   * @param string $sessionId
   * @param string $orderIncrementId
   * @return boolean
   */
  public function salesOrderCancel($sessionId, $orderIncrementId) {
    return $this->__soapCall('salesOrderCancel', array($sessionId, $orderIncrementId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve list of shipments by filters 
   *
   * @param string $sessionId
   * @param filters $filters
   * @return salesOrderShipmentEntityArray
   */
  public function salesOrderShipmentList($sessionId, filters $filters) {
    return $this->__soapCall('salesOrderShipmentList', array($sessionId, $filters),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve shipment information 
   *
   * @param string $sessionId
   * @param string $shipmentIncrementId
   * @return salesOrderShipmentEntity
   */
  public function salesOrderShipmentInfo($sessionId, $shipmentIncrementId) {
    return $this->__soapCall('salesOrderShipmentInfo', array($sessionId, $shipmentIncrementId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Create new shipment for order 
   *
   * @param string $sessionId
   * @param string $orderIncrementId
   * @param orderItemIdQtyArray $itemsQty
   * @param string $comment
   * @param int $email
   * @param int $includeComment
   * @return string
   */
  public function salesOrderShipmentCreate($sessionId, $orderIncrementId, orderItemIdQtyArray $itemsQty, $comment, $email, $includeComment) {
    return $this->__soapCall('salesOrderShipmentCreate', array($sessionId, $orderIncrementId, $itemsQty, $comment, $email, $includeComment),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Add new comment to shipment 
   *
   * @param string $sessionId
   * @param string $shipmentIncrementId
   * @param string $comment
   * @param string $email
   * @param string $includeInEmail
   * @return boolean
   */
  public function salesOrderShipmentAddComment($sessionId, $shipmentIncrementId, $comment, $email, $includeInEmail) {
    return $this->__soapCall('salesOrderShipmentAddComment', array($sessionId, $shipmentIncrementId, $comment, $email, $includeInEmail),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Add new tracking number 
   *
   * @param string $sessionId
   * @param string $shipmentIncrementId
   * @param string $carrier
   * @param string $title
   * @param string $trackNumber
   * @return int
   */
  public function salesOrderShipmentAddTrack($sessionId, $shipmentIncrementId, $carrier, $title, $trackNumber) {
    return $this->__soapCall('salesOrderShipmentAddTrack', array($sessionId, $shipmentIncrementId, $carrier, $title, $trackNumber),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Send shipment info 
   *
   * @param string $sessionId
   * @param string $shipmentIncrementId
   * @param string $comment
   * @return boolean
   */
  public function salesOrderShipmentSendInfo($sessionId, $shipmentIncrementId, $comment) {
    return $this->__soapCall('salesOrderShipmentSendInfo', array($sessionId, $shipmentIncrementId, $comment),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Remove tracking number 
   *
   * @param string $sessionId
   * @param string $shipmentIncrementId
   * @param string $trackId
   * @return boolean
   */
  public function salesOrderShipmentRemoveTrack($sessionId, $shipmentIncrementId, $trackId) {
    return $this->__soapCall('salesOrderShipmentRemoveTrack', array($sessionId, $shipmentIncrementId, $trackId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve list of allowed carriers for order 
   *
   * @param string $sessionId
   * @param string $orderIncrementId
   * @return associativeArray
   */
  public function salesOrderShipmentGetCarriers($sessionId, $orderIncrementId) {
    return $this->__soapCall('salesOrderShipmentGetCarriers', array($sessionId, $orderIncrementId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve list of invoices by filters 
   *
   * @param string $sessionId
   * @param filters $filters
   * @return salesOrderInvoiceEntityArray
   */
  public function salesOrderInvoiceList($sessionId, filters $filters) {
    return $this->__soapCall('salesOrderInvoiceList', array($sessionId, $filters),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve invoice information 
   *
   * @param string $sessionId
   * @param string $invoiceIncrementId
   * @return salesOrderInvoiceEntity
   */
  public function salesOrderInvoiceInfo($sessionId, $invoiceIncrementId) {
    return $this->__soapCall('salesOrderInvoiceInfo', array($sessionId, $invoiceIncrementId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Create new invoice for order 
   *
   * @param string $sessionId
   * @param string $invoiceIncrementId
   * @param orderItemIdQtyArray $itemsQty
   * @param string $comment
   * @param string $email
   * @param string $includeComment
   * @return string
   */
  public function salesOrderInvoiceCreate($sessionId, $invoiceIncrementId, orderItemIdQtyArray $itemsQty, $comment, $email, $includeComment) {
    return $this->__soapCall('salesOrderInvoiceCreate', array($sessionId, $invoiceIncrementId, $itemsQty, $comment, $email, $includeComment),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Add new comment to shipment 
   *
   * @param string $sessionId
   * @param string $invoiceIncrementId
   * @param string $comment
   * @param string $email
   * @param string $includeComment
   * @return boolean
   */
  public function salesOrderInvoiceAddComment($sessionId, $invoiceIncrementId, $comment, $email, $includeComment) {
    return $this->__soapCall('salesOrderInvoiceAddComment', array($sessionId, $invoiceIncrementId, $comment, $email, $includeComment),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Capture invoice 
   *
   * @param string $sessionId
   * @param string $invoiceIncrementId
   * @return boolean
   */
  public function salesOrderInvoiceCapture($sessionId, $invoiceIncrementId) {
    return $this->__soapCall('salesOrderInvoiceCapture', array($sessionId, $invoiceIncrementId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Void invoice 
   *
   * @param string $sessionId
   * @param string $invoiceIncrementId
   * @return boolean
   */
  public function salesOrderInvoiceVoid($sessionId, $invoiceIncrementId) {
    return $this->__soapCall('salesOrderInvoiceVoid', array($sessionId, $invoiceIncrementId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Cancel invoice 
   *
   * @param string $sessionId
   * @param string $invoiceIncrementId
   * @return boolean
   */
  public function salesOrderInvoiceCancel($sessionId, $invoiceIncrementId) {
    return $this->__soapCall('salesOrderInvoiceCancel', array($sessionId, $invoiceIncrementId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve list of creditmemos by filters 
   *
   * @param string $sessionId
   * @param filters $filters
   * @return salesOrderCreditmemoEntityArray
   */
  public function salesOrderCreditmemoList($sessionId, filters $filters) {
    return $this->__soapCall('salesOrderCreditmemoList', array($sessionId, $filters),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve creditmemo information 
   *
   * @param string $sessionId
   * @param string $creditmemoIncrementId
   * @return salesOrderCreditmemoEntity
   */
  public function salesOrderCreditmemoInfo($sessionId, $creditmemoIncrementId) {
    return $this->__soapCall('salesOrderCreditmemoInfo', array($sessionId, $creditmemoIncrementId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Create new creditmemo for order 
   *
   * @param string $sessionId
   * @param string $orderIncrementId
   * @param salesOrderCreditmemoData $creditmemoData
   * @param string $comment
   * @param int $notifyCustomer
   * @param int $includeComment
   * @param string $refundToStoreCreditAmount
   * @return string
   */
  public function salesOrderCreditmemoCreate($sessionId, $orderIncrementId, salesOrderCreditmemoData $creditmemoData, $comment, $notifyCustomer, $includeComment, $refundToStoreCreditAmount) {
    return $this->__soapCall('salesOrderCreditmemoCreate', array($sessionId, $orderIncrementId, $creditmemoData, $comment, $notifyCustomer, $includeComment, $refundToStoreCreditAmount),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Add new comment to shipment 
   *
   * @param string $sessionId
   * @param string $creditmemoIncrementId
   * @param string $comment
   * @param int $notifyCustomer
   * @param int $includeComment
   * @return boolean
   */
  public function salesOrderCreditmemoAddComment($sessionId, $creditmemoIncrementId, $comment, $notifyCustomer, $includeComment) {
    return $this->__soapCall('salesOrderCreditmemoAddComment', array($sessionId, $creditmemoIncrementId, $comment, $notifyCustomer, $includeComment),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Cancel creditmemo 
   *
   * @param string $sessionId
   * @param string $creditmemoIncrementId
   * @return boolean
   */
  public function salesOrderCreditmemoCancel($sessionId, $creditmemoIncrementId) {
    return $this->__soapCall('salesOrderCreditmemoCancel', array($sessionId, $creditmemoIncrementId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve stock data by product ids 
   *
   * @param string $sessionId
   * @param ArrayOfString $products
   * @return catalogInventoryStockItemEntityArray
   */
  public function catalogInventoryStockItemList($sessionId, $products) {
    return $this->__soapCall('catalogInventoryStockItemList', array($sessionId, $products),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Update product stock data 
   *
   * @param string $sessionId
   * @param string $product
   * @param catalogInventoryStockItemUpdateEntity $data
   * @return int
   */
  public function catalogInventoryStockItemUpdate($sessionId, $product, catalogInventoryStockItemUpdateEntity $data) {
    return $this->__soapCall('catalogInventoryStockItemUpdate', array($sessionId, $product, $data),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Multi stock item update 
   *
   * @param string $sessionId
   * @param ArrayOfString $productIds
   * @param catalogInventoryStockItemUpdateEntityArray $productData
   * @return boolean
   */
  public function catalogInventoryStockItemMultiUpdate($sessionId, $productIds, catalogInventoryStockItemUpdateEntityArray $productData) {
    return $this->__soapCall('catalogInventoryStockItemMultiUpdate', array($sessionId, $productIds, $productData),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Create shopping cart 
   *
   * @param string $sessionId
   * @param string $storeId
   * @return int
   */
  public function shoppingCartCreate($sessionId, $storeId) {
    return $this->__soapCall('shoppingCartCreate', array($sessionId, $storeId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve information about shopping cart 
   *
   * @param string $sessionId
   * @param int $quoteId
   * @param string $storeId
   * @return shoppingCartInfoEntity
   */
  public function shoppingCartInfo($sessionId, $quoteId, $storeId) {
    return $this->__soapCall('shoppingCartInfo', array($sessionId, $quoteId, $storeId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Get total prices for shopping cart 
   *
   * @param string $sessionId
   * @param int $quoteId
   * @param string $storeId
   * @return shoppingCartTotalsEntityArray
   */
  public function shoppingCartTotals($sessionId, $quoteId, $storeId) {
    return $this->__soapCall('shoppingCartTotals', array($sessionId, $quoteId, $storeId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Create an order from shopping cart 
   *
   * @param string $sessionId
   * @param int $quoteId
   * @param string $storeId
   * @param ArrayOfString $licenses
   * @return string
   */
  public function shoppingCartOrder($sessionId, $quoteId, $storeId, $licenses) {
    return $this->__soapCall('shoppingCartOrder', array($sessionId, $quoteId, $storeId, $licenses),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Get terms and conditions 
   *
   * @param string $sessionId
   * @param int $quoteId
   * @param string $storeId
   * @return shoppingCartLicenseEntityArray
   */
  public function shoppingCartLicense($sessionId, $quoteId, $storeId) {
    return $this->__soapCall('shoppingCartLicense', array($sessionId, $quoteId, $storeId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Add product(s) to shopping cart 
   *
   * @param string $sessionId
   * @param int $quoteId
   * @param shoppingCartProductEntityArray $products
   * @param string $storeId
   * @return boolean
   */
  public function shoppingCartProductAdd($sessionId, $quoteId, shoppingCartProductEntityArray $products, $storeId) {
    return $this->__soapCall('shoppingCartProductAdd', array($sessionId, $quoteId, $products, $storeId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Update product(s) quantities in shopping cart 
   *
   * @param string $sessionId
   * @param int $quoteId
   * @param shoppingCartProductEntityArray $products
   * @param string $storeId
   * @return boolean
   */
  public function shoppingCartProductUpdate($sessionId, $quoteId, shoppingCartProductEntityArray $products, $storeId) {
    return $this->__soapCall('shoppingCartProductUpdate', array($sessionId, $quoteId, $products, $storeId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Remove product(s) from shopping cart 
   *
   * @param string $sessionId
   * @param int $quoteId
   * @param shoppingCartProductEntityArray $products
   * @param string $storeId
   * @return boolean
   */
  public function shoppingCartProductRemove($sessionId, $quoteId, shoppingCartProductEntityArray $products, $storeId) {
    return $this->__soapCall('shoppingCartProductRemove', array($sessionId, $quoteId, $products, $storeId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Get list of products in shopping cart 
   *
   * @param string $sessionId
   * @param int $quoteId
   * @param string $storeId
   * @return shoppingCartProductResponseEntityArray
   */
  public function shoppingCartProductList($sessionId, $quoteId, $storeId) {
    return $this->__soapCall('shoppingCartProductList', array($sessionId, $quoteId, $storeId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Move product(s) to customer quote 
   *
   * @param string $sessionId
   * @param int $quoteId
   * @param shoppingCartProductEntityArray $products
   * @param string $storeId
   * @return boolean
   */
  public function shoppingCartProductMoveToCustomerQuote($sessionId, $quoteId, shoppingCartProductEntityArray $products, $storeId) {
    return $this->__soapCall('shoppingCartProductMoveToCustomerQuote', array($sessionId, $quoteId, $products, $storeId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Set customer for shopping cart 
   *
   * @param string $sessionId
   * @param int $quoteId
   * @param shoppingCartCustomerEntity $customer
   * @param string $storeId
   * @return boolean
   */
  public function shoppingCartCustomerSet($sessionId, $quoteId, shoppingCartCustomerEntity $customer, $storeId) {
    return $this->__soapCall('shoppingCartCustomerSet', array($sessionId, $quoteId, $customer, $storeId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Set customer's addresses in shopping cart 
   *
   * @param string $sessionId
   * @param int $quoteId
   * @param shoppingCartCustomerAddressEntityArray $customer
   * @param string $storeId
   * @return boolean
   */
  public function shoppingCartCustomerAddresses($sessionId, $quoteId, shoppingCartCustomerAddressEntityArray $customer, $storeId) {
    return $this->__soapCall('shoppingCartCustomerAddresses', array($sessionId, $quoteId, $customer, $storeId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Set shipping method 
   *
   * @param string $sessionId
   * @param int $quoteId
   * @param string $method
   * @param string $storeId
   * @return boolean
   */
  public function shoppingCartShippingMethod($sessionId, $quoteId, $method, $storeId) {
    return $this->__soapCall('shoppingCartShippingMethod', array($sessionId, $quoteId, $method, $storeId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Get list of available shipping methods 
   *
   * @param string $sessionId
   * @param int $quoteId
   * @param string $storeId
   * @return shoppingCartShippingMethodEntityArray
   */
  public function shoppingCartShippingList($sessionId, $quoteId, $storeId) {
    return $this->__soapCall('shoppingCartShippingList', array($sessionId, $quoteId, $storeId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Set payment method 
   *
   * @param string $sessionId
   * @param int $quoteId
   * @param shoppingCartPaymentMethodEntity $method
   * @param string $storeId
   * @return boolean
   */
  public function shoppingCartPaymentMethod($sessionId, $quoteId, shoppingCartPaymentMethodEntity $method, $storeId) {
    return $this->__soapCall('shoppingCartPaymentMethod', array($sessionId, $quoteId, $method, $storeId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Get list of available payment methods 
   *
   * @param string $sessionId
   * @param int $quoteId
   * @param string $store
   * @return shoppingCartPaymentMethodResponseEntityArray
   */
  public function shoppingCartPaymentList($sessionId, $quoteId, $store) {
    return $this->__soapCall('shoppingCartPaymentList', array($sessionId, $quoteId, $store),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Add coupon code for shopping cart 
   *
   * @param string $sessionId
   * @param int $quoteId
   * @param string $couponCode
   * @param string $storeId
   * @return boolean
   */
  public function shoppingCartCouponAdd($sessionId, $quoteId, $couponCode, $storeId) {
    return $this->__soapCall('shoppingCartCouponAdd', array($sessionId, $quoteId, $couponCode, $storeId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Remove coupon code from shopping cart 
   *
   * @param string $sessionId
   * @param int $quoteId
   * @param string $storeId
   * @return boolean
   */
  public function shoppingCartCouponRemove($sessionId, $quoteId, $storeId) {
    return $this->__soapCall('shoppingCartCouponRemove', array($sessionId, $quoteId, $storeId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve list of tags by product 
   *
   * @param string $sessionId
   * @param string $productId
   * @param string $store
   * @return catalogProductTagListEntityArray
   */
  public function catalogProductTagList($sessionId, $productId, $store) {
    return $this->__soapCall('catalogProductTagList', array($sessionId, $productId, $store),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve product tag info 
   *
   * @param string $sessionId
   * @param string $tagId
   * @param string $store
   * @return catalogProductTagInfoEntity
   */
  public function catalogProductTagInfo($sessionId, $tagId, $store) {
    return $this->__soapCall('catalogProductTagInfo', array($sessionId, $tagId, $store),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Add tag(s) to product 
   *
   * @param string $sessionId
   * @param catalogProductTagAddEntity $data
   * @return associativeArray
   */
  public function catalogProductTagAdd($sessionId, catalogProductTagAddEntity $data) {
    return $this->__soapCall('catalogProductTagAdd', array($sessionId, $data),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Update product tag 
   *
   * @param string $sessionId
   * @param string $tagId
   * @param catalogProductTagUpdateEntity $data
   * @param string $store
   * @return boolean
   */
  public function catalogProductTagUpdate($sessionId, $tagId, catalogProductTagUpdateEntity $data, $store) {
    return $this->__soapCall('catalogProductTagUpdate', array($sessionId, $tagId, $data, $store),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Remove product tag 
   *
   * @param string $sessionId
   * @param string $tagId
   * @return boolean
   */
  public function catalogProductTagRemove($sessionId, $tagId) {
    return $this->__soapCall('catalogProductTagRemove', array($sessionId, $tagId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Set a gift message to the cart 
   *
   * @param string $sessionId
   * @param string $quoteId
   * @param giftMessageEntity $giftMessage
   * @param string $storeId
   * @return giftMessageResponse
   */
  public function giftMessageSetForQuote($sessionId, $quoteId, giftMessageEntity $giftMessage, $storeId) {
    return $this->__soapCall('giftMessageSetForQuote', array($sessionId, $quoteId, $giftMessage, $storeId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Setting a gift messages to the quote item 
   *
   * @param string $sessionId
   * @param string $quoteItemId
   * @param giftMessageEntity $giftMessage
   * @param string $storeId
   * @return giftMessageResponse
   */
  public function giftMessageSetForQuoteItem($sessionId, $quoteItemId, giftMessageEntity $giftMessage, $storeId) {
    return $this->__soapCall('giftMessageSetForQuoteItem', array($sessionId, $quoteItemId, $giftMessage, $storeId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Setting a gift messages to the quote items by products 
   *
   * @param string $sessionId
   * @param string $quoteId
   * @param giftMessageAssociativeProductsEntityArray $productsAndMessages
   * @param string $storeId
   * @return giftMessageResponseArray
   */
  public function giftMessageSetForQuoteProduct($sessionId, $quoteId, giftMessageAssociativeProductsEntityArray $productsAndMessages, $storeId) {
    return $this->__soapCall('giftMessageSetForQuoteProduct', array($sessionId, $quoteId, $productsAndMessages, $storeId),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Add links to downloadable product 
   *
   * @param string $sessionId
   * @param string $productId
   * @param catalogProductDownloadableLinkAddEntity $resource
   * @param string $resourceType
   * @param string $store
   * @param string $identifierType
   * @return int
   */
  public function catalogProductDownloadableLinkAdd($sessionId, $productId, catalogProductDownloadableLinkAddEntity $resource, $resourceType, $store, $identifierType) {
    return $this->__soapCall('catalogProductDownloadableLinkAdd', array($sessionId, $productId, $resource, $resourceType, $store, $identifierType),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve list of links and samples for downloadable product 
   *
   * @param string $sessionId
   * @param string $productId
   * @param string $store
   * @param string $identifierType
   * @return catalogProductDownloadableLinkInfoEntity
   */
  public function catalogProductDownloadableLinkList($sessionId, $productId, $store, $identifierType) {
    return $this->__soapCall('catalogProductDownloadableLinkList', array($sessionId, $productId, $store, $identifierType),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

  /**
   * Remove links and samples from downloadable product 
   *
   * @param string $sessionId
   * @param string $linkId
   * @param string $resourceType
   * @return boolean
   */
  public function catalogProductDownloadableLinkRemove($sessionId, $linkId, $resourceType) {
    return $this->__soapCall('catalogProductDownloadableLinkRemove', array($sessionId, $linkId, $resourceType),       array(
            'uri' => 'urn:Magento',
            'soapaction' => ''
           )
      );
  }

}

?>
