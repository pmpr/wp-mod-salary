<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6148bd4c51e00             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Profile\Admin\ListTable; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\WPListTable; use Pmpr\Package\Salary\Model\Income; use Pmpr\Package\Salary\Product; use Exception; use WP_Query; class ProductListTable extends WPListTable { const TOTAL_SALE = "\x74\157\x74\x61\154\x5f\163\x61\x6c\145"; const YOUR_EARNS = "\171\x6f\165\162\137\145\141\162\156\x73"; protected ?Income $income = null; public function __construct() { $this->income = Income::symcgieuakksimmu(); parent::__construct(["\x70\x6c\x75\x72\x61\x6c" => __("\120\162\x6f\x64\165\143\x74\x73", PR__PKG__SALARY), "\163\151\156\x67\x75\x6c\x61\162" => __("\x50\x72\x6f\144\165\x63\164", PR__PKG__SALARY), "\141\x6a\x61\170" => false]); } public function uawiokcagaqwmyaa() : ?Income { return $this->income; } public function kugsomueokogcawo() { $this->prepare_items(); parent::kugsomueokogcawo(); } public function prepare_items() { $wkkweuacukumqmya = $this->get_columns(); $qqkyekmackggcick = []; $osmkwgikieoyykwg = []; $weyoqgcesqgeusiu = ManipulateSetting::omkaowmygoqwsywq(); $gqgemcmoicmgaqie = new WP_Query(["\155\x65\164\x61\x5f\x6b\145\x79" => Product::OWNER, "\x70\x6f\163\164\x5f\x74\x79\x70\145" => "\x70\162\x6f\144\x75\x63\164", "\155\145\164\x61\x5f\x76\x61\x6c\x75\x65" => ManipulateUser::mwikyscisascoeea(), "\x70\x6f\163\x74\x5f\x73\x74\x61\164\x75\x73" => ["\x70\165\x62\154\x69\x73\150"], "\x70\157\163\x74\163\x5f\160\145\162\x5f\x70\x61\x67\x65" => $weyoqgcesqgeusiu]); $this->items = $gqgemcmoicmgaqie->get_posts(); $this->set_pagination_args(["\160\x65\162\137\x70\141\x67\x65" => $weyoqgcesqgeusiu, "\x74\157\x74\141\x6c\x5f\151\x74\145\x6d\163" => $gqgemcmoicmgaqie->found_posts]); $this->_column_headers = [$wkkweuacukumqmya, $qqkyekmackggcick, $osmkwgikieoyykwg]; } public function no_items() { _e("\116\157\x20\x70\x72\x6f\x64\x75\143\164\163\40\x66\x6f\165\x6e\144\56", PR__PKG__SALARY); } public function get_columns() : array { return [self::NAME => __("\116\141\x6d\145", PR__PKG__SALARY), self::TOTAL_SALE => __("\124\157\x74\x61\154\x20\123\x61\x6c\x65", PR__PKG__SALARY), self::YOUR_EARNS => __("\131\157\x75\x72\x20\x45\141\x72\x6e\x73", PR__PKG__SALARY)]; } public function column_name($product) : string { $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($product); return ManipulateHTML::uuccukgasskgimsq("\141", ["\x67\145\145\143\x71\x79\157\x73\157\163\x63\x65\165\x6d\163\153" => $migiiksoiymissge, "\x63\154\x61\163\163" => "\171\167\171\x61\161\x69\157\x69\157\x73\165\x75\x63\x6d\x67\x71"], ManipulateHTML::ciuuiyckmsygceis(ManipulatePost::qcgakseyaikigqco($product))); } public function column_total_sale($product) : string { $uuwmqqqiwksuaise = count($this->omecwkegqsucwsom($product, "\x69\144")); return sprintf(__("\x25\163\x20\116\x75\x6d\x62\145\162", PR__PKG__SALARY), $this->msywmyaoqmaegsuy($uuwmqqqiwksuaise)); } public function column_your_earns($product) : string { $ckwwgsuyuwiaewuw = 0; try { $cseccogesusskess = $this->omecwkegqsucwsom($product); if (!$cseccogesusskess) { goto iekumemscwieugqw; } $ckwwgsuyuwiaewuw = $this->uawiokcagaqwmyaa()->cseaisoguykosgem($cseccogesusskess); iekumemscwieugqw: } catch (Exception $wgaoewqkwgomoaai) { $ckwwgsuyuwiaewuw = 0; } return ManipulateWoocommerce::mcgaskyiamgqmqgu($ckwwgsuyuwiaewuw); } public function omecwkegqsucwsom($product, $wkkweuacukumqmya = ["\x2a"]) : array { return $this->uawiokcagaqwmyaa()->cwkywyqksyucoyia([Income::OWNER => ManipulateUser::mwikyscisascoeea(), Income::PRODUCT => ManipulateUser::mwikyscisascoeea($product), Income::WITHDRAW_STATUS => [self::VALUE => [Income::WITHDRAW_STATUS_WITHDRAWN, Income::WITHDRAW_STATUS_UNWITHDRAWN], self::CLAUSE => self::CONTAIN]], $wkkweuacukumqmya); } }
