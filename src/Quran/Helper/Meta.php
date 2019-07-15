<?php
namespace Quran\Helper;


class Meta
{
    const DO_CDN_BASE_URL = 'http://islam.cdn.damascus.network/';
    private $hizb_quarter;
    private $page;
    private $ruku;
    private $manzil;
    private $sajda;
    
    public function __construct() {
        $this->hizb_quarter = [
            [1,1],[2,26],[2,44],[2,60],[2,75],[2,92],[2,106],[2,124],[2,142],[2,158],[2,177],[2,189],[2,203],[2,219],[2,233],[2,243],[2,253],[2,263],[2,272],[2,283],[3,15],[3,33],[3,52],[3,75],[3,93],[3,113],[3,133],[3,153],[3,171],[3,186],[4,1],[4,12],[4,24],[4,36],[4,58],[4,74],[4,88],[4,100],[4,114],[4,135],[4,148],[4,163],[5,1],[5,12],[5,27],[5,41],[5,51],[5,67],[5,82],[5,97],[5,109],[6,13],[6,36],[6,59],[6,74],[6,95],[6,111],[6,127],[6,141],[6,151],[7,1],[7,31],[7,47],[7,65],[7,88],[7,117],[7,142],[7,156],[7,171],[7,189],[8,1],[8,22],[8,41],[8,61],[9,1],[9,19],[9,34],[9,46],[9,60],[9,75],[9,93],[9,111],[9,122],[10,11],[10,26],[10,53],[10,71],[10,90],[11,6],[11,24],[11,41],[11,61],[11,84],[11,108],[12,7],[12,30],[12,53],[12,77],[12,101],[13,5],[13,19],[13,35],[14,10],[14,28],[15,1],[15,50],[16,1],[16,30],[16,51],[16,75],[16,90],[16,111],[17,1],[17,23],[17,50],[17,70],[17,99],[18,17],[18,32],[18,51],[18,75],[18,99],[19,22],[19,59],[20,1],[20,55],[20,83],[20,111],[21,1],[21,29],[21,51],[21,83],[22,1],[22,19],[22,38],[22,60],[23,1],[23,36],[23,75],[24,1],[24,21],[24,35],[24,53],[25,1],[25,21],[25,53],[26,1],[26,52],[26,111],[26,181],[27,1],[27,27],[27,56],[27,82],[28,12],[28,29],[28,51],[28,76],[29,1],[29,26],[29,46],[30,1],[30,31],[30,54],[31,22],[32,11],[33,1],[33,18],[33,31],[33,51],[33,60],[34,10],[34,24],[34,46],[35,15],[35,41],[36,28],[36,60],[37,22],[37,83],[37,145],[38,21],[38,52],[39,8],[39,32],[39,53],[40,1],[40,21],[40,41],[40,66],[41,9],[41,25],[41,47],[42,13],[42,27],[42,51],[43,24],[43,57],[44,17],[45,12],[46,1],[46,21],[47,10],[47,33],[48,18],[49,1],[49,14],[50,27],[51,31],[52,24],[53,26],[54,9],[55,1],[56,1],[56,75],[57,16],[58,1],[58,14],[59,11],[60,7],[62,1],[63,4],[65,1],[66,1],[67,1],[68,1],[69,1],[70,19],[72,1],[73,20],[75,1],[76,19],[78,1],[80,1],[82,1],[84,1],[87,1],[90,1],[94,1],[100,9]
        ];
		$this->manzil= [[1,1],[5,1],[10,1],[17,1],[26,1],[37,1],[50,1]];
		$this->ruku = [
            [1,1],[2,1],[2,8],[2,21],[2,30],[2,40],[2,47],[2,60],[2,62],[2,72],[2,83],[2,87],[2,97],[2,104],[2,113],[2,122],[2,130],[2,142],[2,148],[2,153],[2,164],[2,168],[2,177],[2,183],[2,189],[2,197],[2,211],[2,217],[2,222],[2,229],[2,232],[2,236],[2,243],[2,249],[2,254],[2,258],[2,261],[2,267],[2,274],[2,282],[2,284],[3,1],[3,10],[3,21],[3,31],[3,42],[3,55],[3,64],[3,72],[3,81],[3,92],[3,102],[3,110],[3,121],[3,130],[3,144],[3,149],[3,156],[3,172],[3,181],[3,190],[4,1],[4,11],[4,15],[4,23],[4,26],[4,34],[4,43],[4,51],[4,60],[4,71],[4,77],[4,88],[4,92],[4,97],[4,101],[4,105],[4,113],[4,116],[4,127],[4,135],[4,142],[4,153],[4,163],[4,172],[5,1],[5,6],[5,12],[5,20],[5,27],[5,35],[5,44],[5,51],[5,57],[5,67],[5,78],[5,87],[5,94],[5,101],[5,109],[5,116],[6,1],[6,11],[6,21],[6,31],[6,42],[6,51],[6,56],[6,61],[6,71],[6,83],[6,91],[6,95],[6,101],[6,111],[6,122],[6,130],[6,141],[6,145],[6,151],[6,155],[7,1],[7,11],[7,26],[7,32],[7,40],[7,48],[7,54],[7,59],[7,65],[7,73],[7,85],[7,94],[7,100],[7,109],[7,127],[7,130],[7,142],[7,148],[7,152],[7,158],[7,163],[7,172],[7,182],[7,189],[8,1],[8,11],[8,20],[8,29],[8,38],[8,45],[8,49],[8,59],[8,65],[8,70],[9,1],[9,7],[9,17],[9,25],[9,30],[9,38],[9,43],[9,60],[9,67],[9,73],[9,81],[9,90],[9,100],[9,111],[9,119],[9,123],[10,1],[10,11],[10,21],[10,31],[10,41],[10,54],[10,61],[10,71],[10,83],[10,93],[10,104],[11,1],[11,9],[11,25],[11,36],[11,50],[11,61],[11,69],[11,84],[11,96],[11,110],[12,1],[12,7],[12,21],[12,30],[12,36],[12,43],[12,50],[12,58],[12,69],[12,80],[12,94],[12,105],[13,1],[13,8],[13,19],[13,27],[13,32],[13,38],[14,1],[14,7],[14,13],[14,22],[14,28],[14,35],[14,42],[15,1],[15,16],[15,26],[15,45],[15,61],[15,80],[16,1],[16,10],[16,22],[16,26],[16,35],[16,41],[16,51],[16,61],[16,66],[16,71],[16,77],[16,84],[16,90],[16,101],[16,111],[16,120],[17,1],[17,11],[17,23],[17,31],[17,41],[17,53],[17,61],[17,71],[17,78],[17,85],[17,94],[17,101],[18,1],[18,13],[18,18],[18,23],[18,32],[18,45],[18,50],[18,54],[18,60],[18,71],[18,83],[18,102],[19,1],[19,16],[19,41],[19,51],[19,66],[19,83],[20,1],[20,25],[20,55],[20,77],[20,90],[20,105],[20,116],[20,129],[21,1],[21,11],[21,30],[21,42],[21,51],[21,76],[21,94],[22,1],[22,11],[22,23],[22,26],[22,34],[22,39],[22,49],[22,58],[22,65],[22,73],[23,1],[23,23],[23,33],[23,51],[23,78],[23,93],[24,1],[24,11],[24,21],[24,27],[24,35],[24,41],[24,51],[24,58],[24,62],[25,1],[25,10],[25,21],[25,35],[25,45],[25,61],[26,1],[26,10],[26,34],[26,53],[26,70],[26,105],[26,123],[26,141],[26,160],[26,176],[26,192],[27,1],[27,15],[27,32],[27,45],[27,59],[27,67],[27,83],[28,1],[28,14],[28,22],[28,29],[28,43],[28,51],[28,61],[28,76],[29,1],[29,14],[29,23],[29,31],[29,45],[29,52],[29,64],[30,1],[30,11],[30,20],[30,28],[30,41],[30,54],[31,1],[31,12],[31,20],[32,1],[32,12],[32,23],[33,1],[33,9],[33,21],[33,28],[33,35],[33,41],[33,53],[33,59],[33,69],[34,1],[34,10],[34,22],[34,31],[34,37],[34,46],[35,1],[35,8],[35,15],[35,27],[35,38],[36,1],[36,13],[36,33],[36,51],[36,68],[37,1],[37,22],[37,75],[37,114],[37,139],[38,1],[38,15],[38,27],[38,41],[38,65],[39,1],[39,10],[39,22],[39,32],[39,42],[39,53],[39,64],[39,71],[40,1],[40,10],[40,21],[40,28],[40,38],[40,51],[40,61],[40,69],[40,79],[41,1],[41,9],[41,19],[41,26],[41,33],[41,45],[42,1],[42,10],[42,20],[42,30],[42,44],[43,1],[43,16],[43,26],[43,36],[43,46],[43,57],[43,68],[44,1],[44,30],[44,43],[45,1],[45,12],[45,22],[45,27],[46,1],[46,11],[46,21],[46,27],[47,1],[47,12],[47,20],[47,29],[48,1],[48,11],[48,18],[48,27],[49,1],[49,11],[50,1],[50,16],[50,30],[51,1],[51,24],[51,47],[52,1],[52,29],[53,1],[53,26],[53,33],[54,1],[54,23],[54,41],[55,1],[55,26],[55,46],[56,1],[56,39],[56,75],[57,1],[57,11],[57,20],[57,26],[58,1],[58,7],[58,14],[59,1],[59,11],[59,18],[60,1],[60,7],[61,1],[61,10],[62,1],[62,9],[63,1],[63,9],[64,1],[64,11],[65,1],[65,8],[66,1],[66,8],[67,1],[67,15],[68,1],[68,34],[69,1],[69,38],[70,1],[70,36],[71,1],[71,21],[72,1],[72,20],[73,1],[73,20],[74,1],[74,32],[75,1],[75,31],[76,1],[76,23],[77,1],[77,41],[78,1],[78,31],[79,1],[79,27],[80,1],[81,1],[82,1],[83,1],[84,1],[85,1],[86,1],[87,1],[88,1],[89,1],[90,1],[91,1],[92,1],[93,1],[94,1],[95,1],[96,1],[97,1],[98,1],[99,1],[100,1],[101,1],[102,1],[103,1],[104,1],[105,1],[106,1],[107,1],[108,1],[109,1],[110,1],[111,1],[112,1],[113,1],[114,1]
        ];
		$this->page = [
            [1,1],[2,1],[2,6],[2,17],[2,25],[2,30],[2,38],[2,49],[2,58],[2,62],[2,70],[2,77],[2,84],[2,89],[2,94],[2,102],[2,106],[2,113],[2,120],[2,127],[2,135],[2,142],[2,146],[2,154],[2,164],[2,170],[2,177],[2,182],[2,187],[2,191],[2,197],[2,203],[2,211],[2,216],[2,220],[2,225],[2,231],[2,234],[2,238],[2,246],[2,249],[2,253],[2,257],[2,260],[2,265],[2,270],[2,275],[2,282],[2,283],[3,1],[3,10],[3,16],[3,23],[3,30],[3,38],[3,46],[3,53],[3,62],[3,71],[3,78],[3,84],[3,92],[3,101],[3,109],[3,116],[3,122],[3,133],[3,141],[3,149],[3,154],[3,158],[3,166],[3,174],[3,181],[3,187],[3,195],[4,1],[4,7],[4,12],[4,15],[4,20],[4,24],[4,27],[4,34],[4,38],[4,45],[4,52],[4,60],[4,66],[4,75],[4,80],[4,87],[4,92],[4,95],[4,102],[4,106],[4,114],[4,122],[4,128],[4,135],[4,141],[4,148],[4,155],[4,163],[4,171],[4,176],[5,3],[5,6],[5,10],[5,14],[5,18],[5,24],[5,32],[5,37],[5,42],[5,46],[5,51],[5,58],[5,65],[5,71],[5,77],[5,83],[5,90],[5,96],[5,104],[5,109],[5,114],[6,1],[6,9],[6,19],[6,28],[6,36],[6,45],[6,53],[6,60],[6,69],[6,74],[6,82],[6,91],[6,95],[6,102],[6,111],[6,119],[6,125],[6,132],[6,138],[6,143],[6,147],[6,152],[6,158],[7,1],[7,12],[7,23],[7,31],[7,38],[7,44],[7,52],[7,58],[7,68],[7,74],[7,82],[7,88],[7,96],[7,105],[7,121],[7,131],[7,138],[7,144],[7,150],[7,156],[7,160],[7,164],[7,171],[7,179],[7,188],[7,196],[8,1],[8,9],[8,17],[8,26],[8,34],[8,41],[8,46],[8,53],[8,62],[8,70],[9,1],[9,7],[9,14],[9,21],[9,27],[9,32],[9,37],[9,41],[9,48],[9,55],[9,62],[9,69],[9,73],[9,80],[9,87],[9,94],[9,100],[9,107],[9,112],[9,118],[9,123],[10,1],[10,7],[10,15],[10,21],[10,26],[10,34],[10,43],[10,54],[10,62],[10,71],[10,79],[10,89],[10,98],[10,107],[11,6],[11,13],[11,20],[11,29],[11,38],[11,46],[11,54],[11,63],[11,72],[11,82],[11,89],[11,98],[11,109],[11,118],[12,5],[12,15],[12,23],[12,31],[12,38],[12,44],[12,53],[12,64],[12,70],[12,79],[12,87],[12,96],[12,104],[13,1],[13,6],[13,14],[13,19],[13,29],[13,35],[13,43],[14,6],[14,11],[14,19],[14,25],[14,34],[14,43],[15,1],[15,16],[15,32],[15,52],[15,71],[15,91],[16,7],[16,15],[16,27],[16,35],[16,43],[16,55],[16,65],[16,73],[16,80],[16,88],[16,94],[16,103],[16,111],[16,119],[17,1],[17,8],[17,18],[17,28],[17,39],[17,50],[17,59],[17,67],[17,76],[17,87],[17,97],[17,105],[18,5],[18,16],[18,21],[18,28],[18,35],[18,46],[18,54],[18,62],[18,75],[18,84],[18,98],[19,1],[19,12],[19,26],[19,39],[19,52],[19,65],[19,77],[19,96],[20,13],[20,38],[20,52],[20,65],[20,77],[20,88],[20,99],[20,114],[20,126],[21,1],[21,11],[21,25],[21,36],[21,45],[21,58],[21,73],[21,82],[21,91],[21,102],[22,1],[22,6],[22,16],[22,24],[22,31],[22,39],[22,47],[22,56],[22,65],[22,73],[23,1],[23,18],[23,28],[23,43],[23,60],[23,75],[23,90],[23,105],[24,1],[24,11],[24,21],[24,28],[24,32],[24,37],[24,44],[24,54],[24,59],[24,62],[25,3],[25,12],[25,21],[25,33],[25,44],[25,56],[25,68],[26,1],[26,20],[26,40],[26,61],[26,84],[26,112],[26,137],[26,160],[26,184],[26,207],[27,1],[27,14],[27,23],[27,36],[27,45],[27,56],[27,64],[27,77],[27,89],[28,6],[28,14],[28,22],[28,29],[28,36],[28,44],[28,51],[28,60],[28,71],[28,78],[28,85],[29,7],[29,15],[29,24],[29,31],[29,39],[29,46],[29,53],[29,64],[30,6],[30,16],[30,25],[30,33],[30,42],[30,51],[31,1],[31,12],[31,20],[31,29],[32,1],[32,12],[32,21],[33,1],[33,7],[33,16],[33,23],[33,31],[33,36],[33,44],[33,51],[33,55],[33,63],[34,1],[34,8],[34,15],[34,23],[34,32],[34,40],[34,49],[35,4],[35,12],[35,19],[35,31],[35,39],[35,45],[36,13],[36,28],[36,41],[36,55],[36,71],[37,1],[37,25],[37,52],[37,77],[37,103],[37,127],[37,154],[38,1],[38,17],[38,27],[38,43],[38,62],[38,84],[39,6],[39,11],[39,22],[39,32],[39,41],[39,48],[39,57],[39,68],[39,75],[40,8],[40,17],[40,26],[40,34],[40,41],[40,50],[40,59],[40,67],[40,78],[41,1],[41,12],[41,21],[41,30],[41,39],[41,47],[42,1],[42,11],[42,16],[42,23],[42,32],[42,45],[42,52],[43,11],[43,23],[43,34],[43,48],[43,61],[43,74],[44,1],[44,19],[44,40],[45,1],[45,14],[45,23],[45,33],[46,6],[46,15],[46,21],[46,29],[47,1],[47,12],[47,20],[47,30],[48,1],[48,10],[48,16],[48,24],[48,29],[49,5],[49,12],[50,1],[50,16],[50,36],[51,7],[51,31],[51,52],[52,15],[52,32],[53,1],[53,27],[53,45],[54,7],[54,28],[54,50],[55,17],[55,41],[55,68],[56,17],[56,51],[56,77],[57,4],[57,12],[57,19],[57,25],[58,1],[58,7],[58,12],[58,22],[59,4],[59,10],[59,17],[60,1],[60,6],[60,12],[61,6],[62,1],[62,9],[63,5],[64,1],[64,10],[65,1],[65,6],[66,1],[66,8],[67,1],[67,13],[67,27],[68,16],[68,43],[69,9],[69,35],[70,11],[70,40],[71,11],[72,1],[72,14],[73,1],[73,20],[74,18],[74,48],[75,20],[76,6],[76,26],[77,20],[78,1],[78,31],[79,16],[80,1],[81,1],[82,1],[83,7],[83,35],[85,1],[86,1],[87,16],[89,1],[89,24],[91,1],[92,15],[95,1],[97,1],[98,8],[100,10],[103,1],[106,1],[109,1],[112,1]
        ];
		$this->sajda = [
            [7,206,'recommended'],[13,15,'recommended'],[16,50,'recommended'],[17,109,'recommended'],[19,58,'recommended'],[22,18,'recommended'],[22,77,'recommended'],[25,60,'recommended'],[27,26,'recommended'],[32,15,'obligatory'],[38,24,'recommended'],[41,38,'obligatory'],[53,62,'obligatory'],[84,21,'recommended'],[96,19,'obligatory']
        ];
    }

    public function getSajdas()
    {
        $r = [];
        foreach($this->sajda as $sajda) {
            $r[] = ['surah' => $sajda[0],
            'ayah' => $sajda[1],
            'recommended' => $sajda[2] == 'recommended' ? true : false,
            'obligatory' => $sajda[2] == 'obligatory' ? true : false
        ];
        }

        return $r;
    }

    public function getRukus()
    {
        $r = [];
        foreach($this->ruku as $ruku) {
            $r[] = ['surah' => $ruku[0], 'ayah' => $ruku[1]];
        }

        return $r;
    }

    public function getManzils()
    {
        $r = [];
        foreach($this->manzil as $ruku) {
            $r[] = ['surah' => $ruku[0], 'ayah' => $ruku[1]];
        }

        return $r;
    }

    public function getPages()
    {
        $r = [];
        foreach($this->page as $ruku) {
            $r[] = ['surah' => $ruku[0], 'ayah' => $ruku[1]];
        }

        return $r;
    }

    public function getHizbQuarters()
    {
        $r = [];
        foreach($this->hizb_quarter as $ruku) {
            $r[] = ['surah' => $ruku[0], 'ayah' => $ruku[1]];
        }

        return $r;
    }

    public function getAudioBySize()
    {
        return [
            '192' => [
                'ar.abdulbasitmurattal',
                'ar.abdullahbasfar',
                'r.abdurrahmaansudais',
                'ar.hanirifai',
                'en.walk',
            ],
            '128' => [
                'ar.ahmedajamy',
                'ar.alafasy',
                'ar.hudhaify',
                'ar.husary',
                'ar.husarymujawwad',
                'ar.mahermuaiqly',
                'ar.minshawi',
                'ar.muhammadayyoub',
                'ar.muhammadjibreel',
                'ar.shaatree',
                'fr.leclerc',
                'zh.chinese',
            ],
            '64' => [
                'ar.abdulbasitmurattal',
                'ar.abdullahbasfar',
                'ar.abdulsamad',
                'ar.abdurrahmaansudais',
                'ar.ahmedajamy',
                'ar.alafasy',
                'ar.aymanswoaid',
                'ar.hanirifai',
                'ar.hudhaify',
                'ar.husary',
                'ar.husarymujawwad',
                'ar.mahermuaiqly',
                'ar.minshawimujawwad',
                'ar.saoodshuraym',
                'ar.shaatree',
                'ur.khan',
            ],
            '48' => [
                'ar.parhizgar',
            ],
            '40' => [
                'fa.hedayatfarfooladvand',
            ],
            '32' => [
                'ar.abdullahbasfar',
                'ar.hudhaify',
                'ar.ibrahimakhbar',
            ]
        ];
    }

    public function getAudioUrlsByReciter($name = 'ar.alafasy')
    {
        $urls = [];
        foreach ($this->getAudioBySize() as $size => $reciters) {
            if (in_array($name, $reciters)) {
                $urls[] = self::DO_CDN_BASE_URL . 'audio/' . $size . '/' . $name . '/';
            }
        }
    }
}
