<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67abce985ecd6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\AbstractSalary; use Pmpr\Module\Salary\Model\Agreement; trait CallbackTrait { public function ekkwaykokcgqkmoi(string $ccamueccusigaaio, string $sqeykgyoooqysmca = Agreement::giskgsemukeyqsws, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) { $sogksuscggsicmac = ''; if ($ccamueccusigaaio) { if (Constants::uwycywkimsycqwcy === $mgkceomocowocqyo) { $sogksuscggsicmac = $this->uiiyaqiemcccwewi($sqeykgyoooqysmca)[$ccamueccusigaaio] ?? null; } else { $ccamueccusigaaio = str_replace("\x5f", "\134", $ccamueccusigaaio); if (is_subclass_of($ccamueccusigaaio, AbstractSalary::class) && ($qgciuiagkkguykgs = $this->sqasccoaywygsoew($ccamueccusigaaio, $sqeykgyoooqysmca))) { $sogksuscggsicmac = [$ccamueccusigaaio::symcgieuakksimmu(), $qgciuiagkkguykgs]; if (!is_callable($sogksuscggsicmac)) { $sogksuscggsicmac = null; } } } } return $sogksuscggsicmac; } private function uiiyaqiemcccwewi(string $sqeykgyoooqysmca, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : array { $sogksuscggsicmac = []; $gsoeomygymgeosya = (array) $this->ocksiywmkyaqseou("\163\x61\154\141\162\171\137{$sqeykgyoooqysmca}\x5f\143\141\x6c\x6c\142\141\143\153\163", []); if (Constants::uwycywkimsycqwcy === $mgkceomocowocqyo) { foreach ($gsoeomygymgeosya as $egkyssmuqcwaciya => $meqocwsecsywiiqs) { if ($this->sqasccoaywygsoew($egkyssmuqcwaciya, $sqeykgyoooqysmca)) { $sogksuscggsicmac[esc_attr(str_replace("\134", "\x5f", $egkyssmuqcwaciya))] = $meqocwsecsywiiqs; } } } return $sogksuscggsicmac; } public function sqasccoaywygsoew($egkyssmuqcwaciya, string $sqeykgyoooqysmca) { $ekiuyucoiagmscgy = false; $cgwqqcukiasoicmi = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi(); switch ($sqeykgyoooqysmca) { case Agreement::giskgsemukeyqsws: $ekiuyucoiagmscgy = $cgwqqcukiasoicmi->myagqecycsaiyqsk($egkyssmuqcwaciya, "\x67\x65\x74\x4d\x61\x74\143\x68\x65\x64\122\x65\x71\165\x65\163\x74\163"); break; case Agreement::ymmcwqwisimwywom: $ekiuyucoiagmscgy = $cgwqqcukiasoicmi->myagqecycsaiyqsk($egkyssmuqcwaciya, "\147\145\x74\115\141\x74\143\150\x65\x64\120\162\157\x64\165\x63\x74\163"); break; } return $ekiuyucoiagmscgy; } }
