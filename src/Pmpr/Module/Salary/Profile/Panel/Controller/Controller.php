<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6554aeeb327ff             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Module\Panel\REST\AbstractREST; use Pmpr\Module\Salary\Model\Agreement as Model; abstract class Controller extends AbstractREST { public function __construct() { $this->abstract = true; parent::__construct(); $this->namespace .= "\57\x73\x61\154\141\x72\171"; } protected function ogaukwwywwoywssy($aqmwamyiwgeeymqa, $oammesyieqmwuwyi, $ekiuyucoiagmscgy, $ywmkwiwkosakssii = []) : array { $megmggkiokqkcwou = 0; $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk, 1); $sogksuscggsicmac = []; $weyoqgcesqgeusiu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ausqeuugegoygouq, 10); if (!($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi))) { goto suqceasgacskcmkc; } $megmggkiokqkcwou = count($oammesyieqmwuwyi); $qmeuaeiseuacgiqc = min($megmggkiokqkcwou, $weyoqgcesqgeusiu * ($suaemuyiacqyugsm - 1) + $weyoqgcesqgeusiu); $ggkaciewmeqmgckg = max(0, $qmeuaeiseuacgiqc - $weyoqgcesqgeusiu); $oammesyieqmwuwyi = array_slice($oammesyieqmwuwyi, $ggkaciewmeqmgckg, $qmeuaeiseuacgiqc); if (!$oammesyieqmwuwyi) { goto oeocukauoyosicso; } foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { if (!is_callable($ekiuyucoiagmscgy)) { goto wkwamkgkwykeqkec; } $igqsaukqcqscimok = call_user_func_array($ekiuyucoiagmscgy, [$aqmwamyiwgeeymqa, $igqsaukqcqscimok, $ywmkwiwkosakssii]); wkwamkgkwykeqkec: if (!$igqsaukqcqscimok) { goto oimkeqocuguqqsqk; } $sogksuscggsicmac[$momcykaoccoymeig] = $igqsaukqcqscimok; oimkeqocuguqqsqk: mogkoocsoeuyoqqa: } wsesqmcqoiyyqkqi: oeocukauoyosicso: suqceasgacskcmkc: $ocqawgquwsqioses = $megmggkiokqkcwou > 0 ? (int) ($megmggkiokqkcwou / $weyoqgcesqgeusiu) : 1; return Model::symcgieuakksimmu()->oosqweumiyeayasy($sogksuscggsicmac, $megmggkiokqkcwou, max(1, $ocqawgquwsqioses), $weyoqgcesqgeusiu); } }
