<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6797767398cf9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\ListTable; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\WPListTable; use Pmpr\Module\Salary\Model\Income; use Exception; use WP_Query; class ProductListTable extends WPListTable { const okqyysagcagmigei = "\164\157\x74\x61\x6c\137\163\141\154\x65"; const eocsmweuyayasmma = "\x79\157\x75\162\137\145\x61\162\156\163"; protected ?Income $income = null; public function __construct() { $this->income = Income::symcgieuakksimmu(); parent::__construct(["\160\154\165\162\141\x6c" => __("\120\162\x6f\144\x75\x63\164\163", PR__MDL__SALARY), "\x73\x69\x6e\147\165\154\x61\x72" => __("\x50\x72\x6f\144\165\143\164", PR__MDL__SALARY), "\x61\152\x61\x78" => false]); } public function uawiokcagaqwmyaa() : ?Income { return $this->income; } public function kugsomueokogcawo() { $this->prepare_items(); parent::kugsomueokogcawo(); } public function prepare_items() { $wkkweuacukumqmya = $this->get_columns(); $qqkyekmackggcick = []; $osmkwgikieoyykwg = []; $weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->qqqooiyuyqmyuwqi(); $gqgemcmoicmgaqie = new WP_Query([Constants::osocaqqumyuooqyo => Constants::iockmgiyoygcswog, Constants::uouymeyqasaeckso => Constants::oguseymmyyoyaako, Constants::iwmgegikocuwggua => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu(), Constants::gikuasuikwemyqoq => [Constants::wmmucsiyiyusmssm], Constants::goqgcigmiawyauai => $weyoqgcesqgeusiu]); $this->items = $gqgemcmoicmgaqie->get_posts(); $this->set_pagination_args([Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu, "\x74\x6f\x74\141\x6c\137\151\164\145\x6d\x73" => $gqgemcmoicmgaqie->found_posts]); $this->_column_headers = [$wkkweuacukumqmya, $qqkyekmackggcick, $osmkwgikieoyykwg]; } public function no_items() { _e("\116\157\x20\160\162\157\x64\x75\143\164\163\40\x66\x6f\x75\x6e\x64\56", PR__MDL__SALARY); } public function get_columns() : array { return [Constants::NAME => __("\116\x61\x6d\145", PR__MDL__SALARY), self::okqyysagcagmigei => __("\124\157\164\x61\x6c\x20\x53\141\x6c\x65", PR__MDL__SALARY), self::eocsmweuyayasmma => __("\131\157\165\162\40\105\141\x72\156\x73", PR__MDL__SALARY)]; } public function column_name($product) : string { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); return $swqimwqeweekeusq->yuawgssgauywkiia($swqimwqeweekeusq->ciuuiyckmsygceis($seumokooiykcomco->qcgakseyaikigqco($product)), $seumokooiykcomco->ycqquoiyyuesegsy($product), ["\143\x6c\x61\163\163" => "\x74\x65\x78\164\55\x64\x65\x63\157\162\141\164\151\x6f\x6e\55\156\x6f\x6e\145"]); } public function column_total_sale($product) : string { $uuwmqqqiwksuaise = count($this->omecwkegqsucwsom($product, Constants::gouqcwikiiygyasc)); return sprintf(__("\x25\x73\40\x4e\x75\155\x62\145\162", PR__MDL__SALARY), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($uuwmqqqiwksuaise)); } public function column_your_earns($product) : string { $ckwwgsuyuwiaewuw = 0; try { $cseccogesusskess = $this->omecwkegqsucwsom($product); if ($cseccogesusskess) { $ckwwgsuyuwiaewuw = $this->uawiokcagaqwmyaa()->cseaisoguykosgem($cseccogesusskess); } } catch (Exception $wgaoewqkwgomoaai) { } return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($ckwwgsuyuwiaewuw); } public function omecwkegqsucwsom($product, $wkkweuacukumqmya = ["\x2a"]) : array { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); return $this->uawiokcagaqwmyaa()->iekyeyicoyyawomk()->cieaqygkucwoqwke([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::iockmgiyoygcswog, $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu()), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::oguseymmyyoyaako, $this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($product)), $eqwoegegiamegqsm->megqywqeuquawkim(Income::eiiuyoyiygsickwe, [Income::ycmomqymkecsysum, Income::youiiwsayswmyuum])], $wkkweuacukumqmya); } }
