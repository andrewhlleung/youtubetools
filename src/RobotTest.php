<?php

namespace Andrewhlleung\Youtubetools;

use Illuminate\Console\Command;
//use App\MyPusher;

class RobotTest extends Command
{
    protected $signature = 'robot:test';

    protected $description = 'Command description';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    { 
        date_default_timezone_set('Asia/Hong_Kong');


        $this->info('Begin '.date('Y-m-d H:i:s'));

        // $path = $this->ask('path?');
        $start = ''.date('Y-m-d H:i:s');
        // $arr = Robot::getStorageDirFiles($path);
        // var_dump($arr);

        // $png_arr=array();
        // $pngtmp_arr = Robot::getStorageDirFiles('combinemedia/png');
        // foreach($pngtmp_arr as $pngtmp){
        //     $pngkey = str_replace('.png','',$pngtmp);
        //     $png_arr[$pngkey]=$pngtmp;
        // }

        // $in_pngkey = Robot::getPngKey($png_arr,$in_mp3path);
        // var_dump($in_pngkey);
    $this->call('robot:combinemedia', [
        'dolast' => 1
    ]);



        $this->info($start.' - '.date('Y-m-d H:i:s'));
        $this->info('End '.date('Y-m-d H:i:s'));

    }
    

//     public function getMp3Info($mp3file){
// $run= <<<EOF
//     sox $mp3file -n stat  2>&1 1> /dev/null
// EOF;
//         $result = shell_exec($run);
//         return $result;
//     }
//     public function combinMp4NMp3($mp4file,$mp3file,$finalmp4file){
// echo $run= <<<EOF
// ffmpeg -y -i '$mp4file' -i '$mp3file' -filter_complex "[1:0]apad" -shortest  '$finalmp4file'
// EOF;
//         $result = shell_exec($run);
//         shell_exec("rm $mp4file");

//         return $result;
//     }

//     public function combineMp4NPng($mp4path,$pngpath,$seconds,$finalmp4file){
// echo $run= <<<EOF
// ffmpeg -y -ss 0 -t $seconds -i '$mp4path' -i '$pngpath' -filter_complex "[0:v][1:v] overlay=0:0" -pix_fmt yuv420p -c:a copy '$finalmp4file'
// EOF;
//         $result = shell_exec($run);
//         return $result;
//     }

//     public function getMp3Duration($audiofile){
// $run= <<<EOF
// ffmpeg -i '$audiofile' 2>&1 | grep "Duration"| cut -d ' ' -f 4 | sed s/,// | sed 's@\..*@@g' | awk '{ split($1, A, ":"); split(A[3], B, "."); print 3600*A[1] + 60*A[2] + B[1] }'
// EOF;
//         $result = shell_exec($run);

//         $result = trim(preg_replace('/\s\s+/', ' ', $result));

//         return $result;
//     }

//     function createGoogleClientByYoutube($token){
//         /// create google client
//         $client = new Google_Client();
//         $client->setClientId('502105323001-ijmfkm1554jsps7kliiouarus7p9smf5.apps.googleusercontent.com');
//         $client->setClientSecret('Z43mbE0NdrTfU3CiPsaRE6oM');

//         $client->setScopes(array(
//         "https://www.googleapis.com/auth/youtube",
//         "https://www.googleapis.com/auth/plus.login",
//         "https://www.googleapis.com/auth/userinfo.email",
//         "https://www.googleapis.com/auth/userinfo.profile",
//         "https://www.googleapis.com/auth/plus.me"
//         ));


//         $client->setAccessType('offline');
//         $client->setAccessToken($token);

//        $client->setRedirectUri('http://youtube.shoaling.ai/youtubeuploader2.php');

//         if ($client->isAccessTokenExpired()) {
//             $client->refreshToken($client->getRefreshToken());
//         }

//         if (!$client->getAccessToken()) {
//             die('No access token.');
//             exit;
//         }
//         return $client;
//     }
}
