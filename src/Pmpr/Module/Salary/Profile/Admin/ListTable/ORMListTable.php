<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b3f9e904396             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\ListTable; use Illuminate\Database\Query\Builder; use Pmpr\Common\Foundation\ORM\View\ListTable; class ORMListTable extends ListTable { public function eeowuwkaomauqkai($siykeiywomwwuoiw = null) : ?Builder { return $this->mgogaykgkoogasim()->wkmkqaiwuqouweye(self::iockmgiyoygcswog, $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu(), "\x3d", $siykeiywomwwuoiw); } public function qkeoieugywkooams() : ?Builder { $siykeiywomwwuoiw = parent::qkeoieugywkooams(); return $this->eeowuwkaomauqkai($siykeiywomwwuoiw); } public function before_pagination(?Builder $siykeiywomwwuoiw) : ?Builder { $siykeiywomwwuoiw = $this->eeowuwkaomauqkai($siykeiywomwwuoiw); return parent::before_pagination($siykeiywomwwuoiw); } public function get_bulk_actions() : array { return []; } protected function handle_row_actions($igqsaukqcqscimok, $column_name, $micmwmywmkguiyyk) : string { return ''; } protected function kgewmaycsoykyaso($ccowyogiqwikkkie) { $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($ccowyogiqwikkkie, self::DELETE); return $ccowyogiqwikkkie; } public function ewgmueueeycoikso($oammesyieqmwuwyi) : array { $wkkweuacukumqmya = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!$meywaqqsugaoeyys) { goto egmayaiikwsskgmy; } foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $swaaugcasqkysckc) { $meqocwsecsywiiqs = ''; if (is_numeric($momcykaoccoymeig)) { goto aueaceeyommgkicu; } $meqocwsecsywiiqs = $swaaugcasqkysckc; goto mysueeoswqgccmui; aueaceeyommgkicu: $momcykaoccoymeig = $swaaugcasqkysckc; $aiowsaccomcoikus = $meywaqqsugaoeyys->oyeskqayoscwciem()->uqeoyqiwywwmsiew($swaaugcasqkysckc); if (!$aiowsaccomcoikus) { goto zayqqeqgcwkekwws; } $meqocwsecsywiiqs = $aiowsaccomcoikus->qcgakseyaikigqco(); zayqqeqgcwkekwws: mysueeoswqgccmui: $wkkweuacukumqmya[$momcykaoccoymeig] = $meqocwsecsywiiqs; oqousikwiiqagoyw: } sqyokemumceysegy: $wkkweuacukumqmya[$meywaqqsugaoeyys::CREATED_AT] = __("\x43\162\145\x61\164\145\144\40\141\164", PR__MDL__SALARY); egmayaiikwsskgmy: return $wkkweuacukumqmya; } }
