<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6241d71f37149             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Model; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Salary\Salary; use Pmpr\Module\Salary\Setting; class Payment extends Common { const gkiqougcwigqqcos = "\x64\145\144\x75\x63\x74"; const wogsoiqickwekywu = "\x70\141\x79\x6f\x75\x74"; const owskgkyceomsskgm = "\x63\x72\145\141\x74\x6f\162"; const qyeimiaoamokwygy = "\x77\x69\164\x68\x64\162\141\167\x5f\x69\144"; const aeikseqkgeyemmis = "\157\162\151\147\x69\156\x5f\x64\145\163\x63"; const kmgieuiymcguqmka = "\x72\x65\x66\x65\162\x65\156\143\145\137\x69\x64"; const sgsawoooocqwouiy = "\x74\x72\x61\x63\x6b\x69\x6e\x67\137\x63\x6f\x64\x65"; const qcqyuwsagkuqymwq = "\x74\x72\x61\156\163\x5f\x64\x61\x74\x65\x74\151\x6d\145"; const kimkegwygaiggcmo = "\157\162\151\x67\x69\156\x5f\141\x63\143\x6f\165\156\x74"; const kiwayowcwgkswqiw = "\144\145\x73\164\x69\156\141\164\x69\x6f\156\137\x64\x65\163\x63"; const yekmyiokocomasqi = "\146\141\151\154\x65\144"; const soeemwaicsiweqyo = "\x73\x75\143\143\145\163\x73"; const umegccguweookqyu = "\x61\x74\x6d"; const mouesqeemeaaukyu = "\141\x70\x69"; const keagmesmwegcscka = "\x70\x61\x79\x61"; const oiyyoggwuogoeywy = "\x73\x61\164\156\141"; const mqmqsemegeeckcoi = "\155\157\x62\151\154\x65\137\142\x61\x6e\153"; public function ckgmycmaukqgkosk() { $this->showTimestamp = false; parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->guiaswksukmgageq(__("\120\x61\x79\x6d\x65\156\164", PR__MDL__SALARY))->muuwuqssqkaieqge(__("\x50\141\x79\155\145\156\x74\163", PR__MDL__SALARY))->aseucqksocwomwos()->qemeyueyiwgsokuc(["\x70\x6f\163\151\x74\151\x6f\156" => 4])->gemkqqguesukeocw(); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->qcyqgwuuymykkcke(self::wogsoiqickwekywu)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\x50\x61\171\x6f\x75\164", PR__MDL__SALARY)), $this->owgikiusoocuqqgo(self::ciywsqoeiymemsys, $this->agausceiyceikeag())->gswweykyogmsyawy(__("\123\x74\x61\164\165\x73", PR__MDL__SALARY)), $this->geqyygqiwiqusekc(self::owskgkyceomsskgm)->gswweykyogmsyawy(__("\103\x72\145\x61\x74\157\162", PR__MDL__SALARY)), $this->owgikiusoocuqqgo(self::gcegwkuowcquosok, $this->yoiogykiyuooqcgi())->gswweykyogmsyawy(__("\124\145\x72\155\151\x6e\141\154", PR__MDL__SALARY)), $this->wyauigyyoceiaygw(self::qcqyuwsagkuqymwq)->gswweykyogmsyawy(__("\124\162\x61\156\x73\141\x63\x74\151\157\x6e\x20\x44\x61\164\x65\164\151\155\145", PR__MDL__SALARY)), $this->qcyqgwuuymykkcke(self::gkiqougcwigqqcos)->acceqyqygswoecwe(20)->gswweykyogmsyawy(__("\104\x65\x64\165\x63\x74\163", PR__MDL__SALARY))->acokiqqgsmoqaeyu(), $this->qcyqgwuuymykkcke(self::kmgieuiymcguqmka)->acceqyqygswoecwe(10)->gswweykyogmsyawy(__("\122\x65\146\x65\162\x65\x6e\143\x65\x20\x49\104", PR__MDL__SALARY)), $this->qcyqgwuuymykkcke(self::sgsawoooocqwouiy)->acceqyqygswoecwe(11)->gswweykyogmsyawy(__("\124\x72\x61\x63\153\x69\156\x67\40\x43\157\x64\145", PR__MDL__SALARY)), $this->qcyqgwuuymykkcke(self::kimkegwygaiggcmo)->acceqyqygswoecwe(8)->gswweykyogmsyawy(__("\x4f\x72\x69\147\151\156\40\101\x63\143\157\165\156\164", PR__MDL__SALARY)), $this->ymuegqgyuagyucws(self::kiwayowcwgkswqiw)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\104\x65\x73\x74\151\156\141\x74\151\157\156\x20\x44\x65\x73\x63\x72\x69\160\164\151\x6f\156", PR__MDL__SALARY)), $this->ymuegqgyuagyucws(self::aeikseqkgeyemmis)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\x4f\x72\x69\x67\151\x6e\x20\104\145\163\143\162\x69\160\x74\x69\157\156", PR__MDL__SALARY)), $this->ggiieomioscuigco(self::qyeimiaoamokwygy)->uwmyqckcyamwaiww(Withdraw::class)->wuuqgaekqeymecag()->gswweykyogmsyawy(__("\x57\151\x74\x68\x64\x72\141\167", PR__MDL__SALARY))]); parent::ewaqwooqoqmcoomi(); } public function gcmweiksuqcyskmi($mksyucucyswaukig) { $zomswssgcqowmuoy = Salary::symcgieuakksimmu()->kgkkgawwksigaqyy($miowmmgaiagcuyoo, $eiwicgsqoiaeawkk); if (!$zomswssgcqowmuoy) { goto casgoamcqkekgeeo; } $sqeykgyoooqysmca = ManipulateArray::get($zomswssgcqowmuoy, Setting::iyqigkiieoieskgy); $eqgoocgaqwqcimie = ManipulateArray::get($zomswssgcqowmuoy, Setting::oyyoccawmkogkcyy); $smowyuyseuwiaiei = 0; if ($sqeykgyoooqysmca === Setting::mikaaiimemmoegcm) { goto cysgqimowcqoqqsc; } if (!($sqeykgyoooqysmca === Setting::ogkkygkwcccggasw)) { goto kakkuyeccaacewyo; } $smowyuyseuwiaiei = $eqgoocgaqwqcimie; kakkuyeccaacewyo: goto ismeikacqqyqcmqe; cysgqimowcqoqqsc: $gkimsiseuqckqkso = $eqgoocgaqwqcimie = $this->uoemumeeowowuqaq($mksyucucyswaukig, false); ismeikacqqyqcmqe: if (!($smowyuyseuwiaiei > 0)) { goto qsokkkyoackoycie; } qsokkkyoackoycie: casgoamcqkekgeeo: } public function kssgsuewkcwgiksa() : array { return [self::ciywsqoeiymemsys => ["\143\x6f\x6c" => "\155\144\x2d\x36\40\154\x67\55\64", "\164\171\160\x65" => "\142\x73\163\145\154\145\143\x74", "\x6f\x70\164\151\157\156\x73" => $this->agausceiyceikeag()], self::gcegwkuowcquosok => ["\x63\x6f\x6c" => "\x6d\x64\x2d\x36\x20\154\x67\55\x34", "\x74\171\160\x65" => "\x62\163\163\145\x6c\x65\143\x74", "\x6f\x70\x74\151\157\x6e\x73" => $this->yoiogykiyuooqcgi()], self::qcqyuwsagkuqymwq => ["\143\x6f\x6c" => "\x6d\x64\x2d\x36\x20\154\x67\x2d\x34"], self::gkiqougcwigqqcos => ["\143\x6f\154" => "\x6d\144\x2d\66\40\x6c\x67\55\64", "\141\163\x2d\x6d\x6f\156\x65\x79"], self::kmgieuiymcguqmka => ["\x63\x6f\154" => "\x6d\144\x2d\x36\x20\x6c\x67\55\x34", "\x61\163\55\156\x75\155\142\145\x72"], self::sgsawoooocqwouiy => ["\x63\x6f\154" => "\x6d\144\55\x36\40\154\147\55\x34", "\x61\163\x2d\x6e\x75\155\x62\145\162"], self::wogsoiqickwekywu => ["\143\157\x6c" => "\155\x64\55\66", "\x61\x73\x2d\x6d\x6f\156\145\171"], self::kimkegwygaiggcmo => ["\143\x6f\x6c" => "\155\x64\x2d\x36", "\164\171\160\145" => "\x62\163\163\x65\x6c\x65\143\x74", "\x6f\160\164\x69\x6f\156\163" => Setting::wcwwuuouickuocsa(null, self::emgcgiseaoouacge)], self::owskgkyceomsskgm => ["\164\171\x70\x65" => "\150\x69\144\144\145\x6e"], self::aeikseqkgeyemmis => ["\x63\x6f\154" => "\x6c\x67\x2d\66", "\x72\157\x77\x73" => 3], self::kiwayowcwgkswqiw => ["\143\157\154" => "\154\147\55\66", "\x72\x6f\167\163" => 3]]; } public function oiemcgqyamccuagg($icwicymcioeyeyek = []) { $eiuuauwyukskgois = ManipulateArray::get($icwicymcioeyeyek, self::owskgkyceomsskgm); if ($eiuuauwyukskgois) { goto yseyyukqaowwouua; } $icwicymcioeyeyek[self::owskgkyceomsskgm] = ManipulateUser::mwikyscisascoeea(); yseyyukqaowwouua: return parent::oiemcgqyamccuagg($icwicymcioeyeyek); } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::ciywsqoeiymemsys: if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto ywqakqkmmcoceqka; } $eqgoocgaqwqcimie = $this->usouqioywgosyqqy($eqgoocgaqwqcimie, $this->agausceiyceikeag($eqgoocgaqwqcimie)); ywqakqkmmcoceqka: goto qcgyggiaowuqswuw; case self::gcegwkuowcquosok: $eqgoocgaqwqcimie = $this->yoiogykiyuooqcgi($eqgoocgaqwqcimie); goto qcgyggiaowuqswuw; case self::owskgkyceomsskgm: $mkucggyaiaukqoce = ManipulateUser::get($eqgoocgaqwqcimie, true); if (!$mkucggyaiaukqoce) { goto emauuoieewwoeyqq; } if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto kwsqgqmwyyeykgum; } $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa(ManipulateUser::yyykkcyiksewsoqy($mkucggyaiaukqoce), ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce, "\144\x69\x73\x70\x6c\x61\171\137\x6e\141\x6d\x65", true)); kwsqgqmwyyeykgum: emauuoieewwoeyqq: goto qcgyggiaowuqswuw; case self::wogsoiqickwekywu: case self::gkiqougcwigqqcos: $eqgoocgaqwqcimie = ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie); goto qcgyggiaowuqswuw; case self::kimkegwygaiggcmo: if (!$eqgoocgaqwqcimie) { goto koukiyqaccegmquc; } $eiwicgsqoiaeawkk = Setting::wcwwuuouickuocsa($eqgoocgaqwqcimie); $eqgoocgaqwqcimie = ManipulateArray::get($eiwicgsqoiaeawkk, Setting::gskosgoeymsumieq); koukiyqaccegmquc: goto qcgyggiaowuqswuw; case self::qyeimiaoamokwygy: if (!$eqgoocgaqwqcimie) { goto ekakkiuuquqkccse; } $eqgoocgaqwqcimie = $this->aouwuegyyugiwksc($qgoqiacsiccwoawi, $mksyucucyswaukig); ekakkiuuquqkccse: goto qcgyggiaowuqswuw; } sooecucuakgkuyis: qcgyggiaowuqswuw: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } public function agausceiyceikeag($iueymcwwscwqkiyq = null) { $oqseeekuqisekiwy = [self::soeemwaicsiweqyo => __("\x53\x75\143\x63\x65\x73\163", PR__MDL__SALARY), self::yekmyiokocomasqi => __("\x46\141\151\x6c\145\144", PR__MDL__SALARY)]; return ManipulateArray::get($oqseeekuqisekiwy, $iueymcwwscwqkiyq, $oqseeekuqisekiwy); } public function yoiogykiyuooqcgi($gwwuygsskqcomoas = null) { $skseiqgiyyiuquuu = [self::mqmqsemegeeckcoi => __("\115\157\x62\x69\154\x65\x20\x42\x61\156\x6b", PR__MDL__SALARY), self::keagmesmwegcscka => __("\120\x41\131\101", PR__MDL__SALARY), self::oiyyoggwuogoeywy => __("\123\x41\x54\x4e\x41", PR__MDL__SALARY), self::umegccguweookqyu => __("\101\124\115", PR__MDL__SALARY), self::mouesqeemeaaukyu => __("\x41\120\111", PR__MDL__SALARY)]; return ManipulateArray::get($skseiqgiyyiuquuu, $gwwuygsskqcomoas, $skseiqgiyyiuquuu); } }
