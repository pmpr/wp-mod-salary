<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6241d71f37149             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\ListTable; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\WPListTable; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Product; use Exception; use WP_Query; class ProductListTable extends WPListTable { const okqyysagcagmigei = "\164\157\164\x61\154\137\163\x61\154\x65"; const eocsmweuyayasmma = "\171\x6f\165\x72\137\145\141\162\x6e\x73"; protected ?Income $income = null; public function __construct() { $this->income = Income::symcgieuakksimmu(); parent::__construct(["\x70\154\x75\162\x61\154" => __("\x50\162\x6f\144\165\143\x74\x73", PR__MDL__SALARY), "\163\x69\x6e\147\x75\x6c\141\162" => __("\x50\x72\x6f\144\x75\143\x74", PR__MDL__SALARY), "\x61\x6a\141\170" => false]); } public function uawiokcagaqwmyaa() : ?Income { return $this->income; } public function kugsomueokogcawo() { $this->prepare_items(); parent::kugsomueokogcawo(); } public function prepare_items() { $wkkweuacukumqmya = $this->get_columns(); $qqkyekmackggcick = []; $osmkwgikieoyykwg = []; $weyoqgcesqgeusiu = ManipulateSetting::omkaowmygoqwsywq(); $gqgemcmoicmgaqie = new WP_Query(["\155\145\x74\141\x5f\x6b\145\x79" => Product::iockmgiyoygcswog, "\160\x6f\x73\164\137\x74\x79\x70\x65" => "\160\x72\x6f\144\x75\x63\x74", "\155\x65\164\x61\137\x76\141\x6c\x75\x65" => ManipulateUser::mwikyscisascoeea(), "\160\x6f\163\x74\x5f\x73\x74\141\164\165\x73" => ["\x70\165\x62\x6c\x69\x73\x68"], "\x70\157\x73\x74\x73\137\160\x65\162\137\x70\x61\147\145" => $weyoqgcesqgeusiu]); $this->items = $gqgemcmoicmgaqie->get_posts(); $this->set_pagination_args(["\160\x65\162\137\x70\141\147\145" => $weyoqgcesqgeusiu, "\164\157\164\141\154\x5f\151\164\145\x6d\x73" => $gqgemcmoicmgaqie->found_posts]); $this->_column_headers = [$wkkweuacukumqmya, $qqkyekmackggcick, $osmkwgikieoyykwg]; } public function no_items() { _e("\116\x6f\x20\160\x72\157\144\165\x63\164\x73\40\x66\x6f\165\156\144\56", PR__MDL__SALARY); } public function get_columns() : array { return [self::NAME => __("\116\141\155\x65", PR__MDL__SALARY), self::okqyysagcagmigei => __("\x54\x6f\164\x61\x6c\40\x53\x61\x6c\145", PR__MDL__SALARY), self::eocsmweuyayasmma => __("\x59\157\x75\162\40\x45\x61\162\156\163", PR__MDL__SALARY)]; } public function column_name($product) : string { $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($product); return ManipulateHTML::uuccukgasskgimsq("\141", ["\150\162\145\146" => $migiiksoiymissge, "\143\154\141\x73\163" => "\x74\x65\x78\164\x2d\x64\145\143\x6f\x72\x61\x74\x69\x6f\x6e\55\x6e\157\x6e\145"], ManipulateHTML::ciuuiyckmsygceis(ManipulatePost::qcgakseyaikigqco($product))); } public function column_total_sale($product) : string { $uuwmqqqiwksuaise = count($this->omecwkegqsucwsom($product, "\x69\x64")); return sprintf(__("\x25\x73\x20\116\x75\x6d\x62\145\162", PR__MDL__SALARY), $this->msywmyaoqmaegsuy($uuwmqqqiwksuaise)); } public function column_your_earns($product) : string { $ckwwgsuyuwiaewuw = 0; try { $cseccogesusskess = $this->omecwkegqsucwsom($product); if (!$cseccogesusskess) { goto kqksuugcgsyeoayy; } $ckwwgsuyuwiaewuw = $this->uawiokcagaqwmyaa()->cseaisoguykosgem($cseccogesusskess); kqksuugcgsyeoayy: } catch (Exception $wgaoewqkwgomoaai) { $ckwwgsuyuwiaewuw = 0; } return ManipulateWoocommerce::mcgaskyiamgqmqgu($ckwwgsuyuwiaewuw); } public function omecwkegqsucwsom($product, $wkkweuacukumqmya = ["\x2a"]) : array { return $this->uawiokcagaqwmyaa()->cwkywyqksyucoyia([Income::iockmgiyoygcswog => ManipulateUser::mwikyscisascoeea(), Income::oguseymmyyoyaako => ManipulateUser::mwikyscisascoeea($product), Income::eiiuyoyiygsickwe => [self::ciyoccqkiamemcmm => [Income::aquouykoyqcwccay, Income::ugswgyqgycqguios], self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]], $wkkweuacukumqmya); } }
