<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             614ca04edad5c             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Model; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Payment extends Common { const PAYOUT = "\x70\x61\171\x6f\165\164"; const CREATOR = "\143\x72\145\x61\x74\157\x72"; const WITHDRAW_ID = "\x77\151\164\150\144\162\x61\x77\x5f\x69\x64"; const ORIGIN_DESC = "\157\162\x69\x67\x69\156\137\144\145\163\x63"; const ORIGIN_BANK = "\157\162\151\x67\x69\x6e\x5f\142\x61\156\x6b"; const REFERENCE_ID = "\162\x65\146\x65\x72\145\x6e\x63\145\137\151\144"; const TRACKING_CODE = "\x74\162\141\143\x6b\x69\156\x67\x5f\x63\x6f\144\145"; const TRANS_DATETIME = "\x74\162\141\x6e\163\137\144\x61\164\145\x74\151\155\x65"; const ORIGIN_ACCOUNT = "\x6f\162\151\147\151\x6e\137\141\x63\143\x6f\165\x6e\164"; const DESTINATION_DESC = "\x64\x65\x73\164\x69\x6e\x61\x74\151\x6f\x6e\137\x64\x65\x73\x63"; const STATUS_FAILED = "\146\x61\151\154\x65\x64"; const STATUS_SUCCESS = "\x73\165\143\x63\145\163\x73"; const TERMINAL_ATM = "\141\x74\155"; const TERMINAL_API = "\x61\160\151"; const TERMINAL_PAYA = "\x70\x61\x79\141"; const TERMINAL_SANTA = "\163\x61\x6e\x74\x61"; const TERMINAL_MOBILE_BANK = "\x6d\157\142\x69\154\145\x5f\142\x61\x6e\x6b"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->guiaswksukmgageq(__("\x50\141\171\155\x65\156\164", PR__PKG__SALARY))->muuwuqssqkaieqge(__("\120\141\171\x6d\x65\x6e\x74\163", PR__PKG__SALARY))->qemeyueyiwgsokuc(["\160\157\163\x69\x74\x69\157\x6e" => 4])->gemkqqguesukeocw(); } public function eucukwckumgiyyww($oyuikeusicgqgwak = []) : array { return parent::eucukwckumgiyyww([$this->ggiieomioscuigco(self::WITHDRAW_ID)->uwmyqckcyamwaiww(Withdraw::class)->wuuqgaekqeymecag()->gswweykyogmsyawy(__("\x57\x69\x74\150\x64\162\141\x77", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::PAYOUT)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\x50\x61\171\x6f\x75\x74", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::CREATOR)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\x43\162\145\x61\x74\157\162", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::TERMINAL)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\x54\x65\162\155\x69\x6e\141\154", PR__PKG__SALARY)), $this->wyauigyyoceiaygw(self::TRANS_DATETIME)->gswweykyogmsyawy(__("\124\162\x61\x6e\x73\141\143\x74\x69\157\x6e\x20\x44\141\164\145\x74\x69\x6d\145", PR__PKG__SALARY)), $this->ymuegqgyuagyucws(self::DESTINATION_DESC)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\104\x65\x73\164\151\156\141\x74\x69\157\x6e\40\104\x65\x73\143\x72\151\160\164\x69\x6f\x6e", PR__PKG__SALARY)), $this->ymuegqgyuagyucws(self::ORIGIN_DESC)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\117\x72\x69\147\x69\156\40\x44\145\163\143\x72\x69\x70\x74\151\x6f\156", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::REFERENCE_ID)->acceqyqygswoecwe(100)->gswweykyogmsyawy(__("\122\145\146\145\162\145\156\143\145\x20\x49\104", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::TRACKING_CODE)->acceqyqygswoecwe(100)->gswweykyogmsyawy(__("\124\x72\x61\x63\153\151\156\147\40\103\x6f\x64\x65", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::ORIGIN_BANK)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\x4f\162\x69\147\151\x6e\x20\102\141\156\153", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::ORIGIN_ACCOUNT)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\x4f\162\x69\147\151\x6e\40\101\x63\143\x6f\165\156\x74", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::STATUS)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\x53\x74\141\x74\x75\x73", PR__PKG__SALARY))]); } public function kssgsuewkcwgiksa() : array { return [self::STATUS => ["\143\157\x6c" => "\155\x64\55\x36\40\154\147\x2d\x33", "\x74\x79\x70\145" => "\x62\163\163\x65\x6c\145\x63\164", "\157\x70\x74\x69\157\x6e\x73" => $this->agausceiyceikeag(), "\x72\145\161\165\151\x72\145\144"], self::TERMINAL => ["\143\x6f\154" => "\155\x64\55\66\x20\154\x67\x2d\x33", "\x74\171\160\x65" => "\142\163\x73\145\x6c\145\143\x74", "\x6f\160\x74\x69\157\156\163" => $this->yoiogykiyuooqcgi(), "\x72\145\161\x75\151\x72\x65\x64"], self::CREATOR => ["\164\171\x70\x65" => "\150\x69\x64\x64\145\156", "\x76\x61\154\x75\x65" => ManipulateUser::mwikyscisascoeea()], self::ORIGIN_DESC => ["\143\x6f\x6c" => "\x6d\144\55\x36", "\x72\x6f\167\x73" => 3, "\x63\x6c\141\163\x73" => "\167\x2d\x6d\x64\x2d\61\60\60"], self::DESTINATION_DESC => ["\x63\157\154" => "\155\x64\55\66", "\162\157\x77\163" => 3, "\x63\154\141\163\x73" => "\167\55\155\x64\55\x31\60\60"]]; } public function agausceiyceikeag($iueymcwwscwqkiyq = null) { $oqseeekuqisekiwy = [self::STATUS_FAILED => __("\106\141\x69\x6c\x65\x64", PR__PKG__SALARY), self::STATUS_SUCCESS => __("\123\x75\143\143\145\163\x73", PR__PKG__SALARY)]; return ManipulateArray::get($oqseeekuqisekiwy, $iueymcwwscwqkiyq, $oqseeekuqisekiwy); } public function yoiogykiyuooqcgi($gwwuygsskqcomoas = null) { $skseiqgiyyiuquuu = [self::TERMINAL_PAYA => __("\120\x41\x59\101", PR__PKG__SALARY), self::TERMINAL_SANTA => __("\x53\x41\x4e\124\101", PR__PKG__SALARY), self::TERMINAL_MOBILE_BANK => __("\115\157\142\151\154\145\x20\102\141\x6e\x6b", PR__PKG__SALARY), self::TERMINAL_ATM => __("\x41\x54\115", PR__PKG__SALARY), self::TERMINAL_API => __("\x41\x50\111", PR__PKG__SALARY)]; return ManipulateArray::get($skseiqgiyyiuquuu, $gwwuygsskqcomoas, $skseiqgiyyiuquuu); } }
