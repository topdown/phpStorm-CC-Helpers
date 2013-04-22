<?php

/**
 * =========================================================================================
 * Define your models either here or in the actual controllers using them
 * *******************************************************
 * Mark system/engine/controller.php as Plain Text
 * Mark system/engine/model.php as Plain Text
 * Mark system/engine/loader.php as Plain Text
 * *******************************************************
 * The basic idea is we are telling the IDE what var or property belongs to what class
 * The result gives use code completion and suggestion
 *
 * If you have this file in the project and open the ControllerCatalogProduct class you will
 * see everything is loading correctly in the IDE and code completion works for both core and
 * models for this module
 * =========================================================================================
 *
 * -----------------------------------------------------
 * EXAMPLE - OpenCart's Catalog Product Controller Models
 * Class ControllerCatalogProduct
 * -----------------------------------------------------
 * @property ModelSaleCustomerGroup       $model_sale_customer_group
 * @property ModelCatalogProduct          $model_catalog_product
 * @property ModelToolImage               $model_tool_image
 * @property ModelLocalisationLanguage    $model_localisation_language
 * @property ModelSettingStore            $model_setting_store
 * @property ModelCatalogOption           $model_catalog_option
 * @property ModelLocalisationTaxClass    $model_localisation_tax_class
 * @property ModelLocalisationStockStatus $model_localisation_stock_status
 * @property ModelLocalisationWeightClass $model_localisation_weight_class
 * @property ModelLocalisationLengthClass $model_localisation_length_class
 * @property ModelCatalogManufacturer     $model_catalog_manufacturer
 * @property ModelCatalogFilter           $model_catalog_filter
 * @property ModelCatalogAttribute        $model_catalog_attribute
 * @property ModelCatalogDownload         $model_catalog_download
 *
 * -----------------------------------------------------
 * EXAMPLE - A couple of OpenCart's Catalog Category Controller Models
 * -----------------------------------------------------
 * @property ModelCatalogCategory         $model_catalog_category
 * @property ModelSettingSetting          $model_setting_setting
 * @property ModelDesignLayout            $model_design_layout
 *
 * =========================================================================================
 * =========================================================================================
 * =========================================================================================
 * =========================================================================================
 * -----------------------------------------------------
 * OpenCart Library Classes
 * -----------------------------------------------------
 * @property Affiliate                    $affiliate
 * @property Cache                        $cache
 * @property Captcha                      $captcha
 * @property Cart                         $cart
 * @property Config                       $config
 * @property Currency                     $currency
 * @property Customer                     $customer
 * @property MySQL                        $db
 * @property Document                     $document
 * @property Encryption                   $encryption
 * @property Loader                       $load
 * @property Image                        $image
 * @property Language                     $language
 * @property Length                       $length
 * @property Log                          $log
 * @property Mail                         $mail
 * @property Pagination                   $pagination
 * @property Request                      $request
 * @property Response                     $response
 * @property Session                      $session
 * @property Tax                          $tax
 * @property Template                     $template
 * @property Url                          $url
 * @property User                         $user
 * @property Weight                       $weight
 *
 * -----------------------------------------------------
 * The actual Controller Class properties and methods
 * -----------------------------------------------------
 * @property                              $registry
 * @property                              $id
 * @property                              $layout
 * @property                              $children
 * @property                              $data
 * @property                              $output
 *
 * @method forward
 * @method redirect
 * @method getChild
 * @method render
 */
class Controller
{
}

