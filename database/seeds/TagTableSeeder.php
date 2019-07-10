<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Tag;
use Carbon\Carbon;
class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    $tags = [
        [
        'name'=>'18years',
        'description' =>'this is 18years description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'18yearsold',
        'description' =>'this is 18yearsold description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'18yo',
        'description' =>'this is 18yo description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'19yo',
        'description' =>'this is 19yo description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'1st',
        'description' =>'this is 1st description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'21sextury',
        'description' =>'this is 21sextury description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'3some',
        'description' =>'this is 3some description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'3way',
        'description' =>'this is 3way description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'4some',
        'description' =>'this is 4some description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'8teen',
        'description' =>'this is 8teen description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'8teenxxx',
        'description' =>'this is 8teenxxx description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'about',
        'description' =>'this is about description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'absolutely',
        'description' =>'this is absolutely description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'action',
        'description' =>'this is action description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'actress',
        'description' =>'this is actress description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'adorable',
        'description' =>'this is adorable description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'adult',
        'description' =>'this is adult description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'adultery',
        'description' =>'this is adultery description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'african',
        'description' =>'this is african description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'alexis',
        'description' =>'this is alexis description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'all',
        'description' =>'this is all description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'also',
        'description' =>'this is also description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'alt',
        'description' =>'this is alt description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'alternative',
        'description' =>'this is alternative description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'amador',
        'description' =>'this is amador description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'amadora',
        'description' =>'this is amadora description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'amante',
        'description' =>'this is amante description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'amateur',
        'description' =>'this is amateur description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'amateure',
        'description' =>'this is amateure description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'amateurporn',
        'description' =>'this is amateurporn description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'amateurs',
        'description' =>'this is amateurs description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'amateursex',
        'description' =>'this is amateursex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'amatuer',
        'description' =>'this is amatuer description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'amature',
        'description' =>'this is amature description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'amatures',
        'description' =>'this is amatures description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'amazing',
        'description' =>'this is amazing description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'america',
        'description' =>'this is america description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'american',
        'description' =>'this is american description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'amiga',
        'description' =>'this is amiga description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'amigo',
        'description' =>'this is amigo description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'amsterdam',
        'description' =>'this is amsterdam description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'anal',
        'description' =>'this is anal description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'analfuck',
        'description' =>'this is analfuck description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'analfucking',
        'description' =>'this is analfucking description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'analized',
        'description' =>'this is analized description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'analporn',
        'description' =>'this is analporn description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'analsex',
        'description' =>'this is analsex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'and',
        'description' =>'this is and description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'angel',
        'description' =>'this is angel description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'angry',
        'description' =>'this is angry description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'animated',
        'description' =>'this is animated description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'animation',
        'description' =>'this is animation description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'anime',
        'description' =>'this is anime description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'anus',
        'description' =>'this is anus description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'arab',
        'description' =>'this is arab description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'arabian',
        'description' =>'this is arabian description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'arabic',
        'description' =>'this is arabic description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'area',
        'description' =>'this is area description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'argenta',
        'description' =>'this is argenta description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'argentina',
        'description' =>'this is argentina description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'art',
        'description' =>'this is art description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'asia',
        'description' =>'this is asia description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'asian',
        'description' =>'this is asian description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'asiangirl',
        'description' =>'this is asiangirl description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'asianmilf',
        'description' =>'this is asianmilf description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'asians',
        'description' =>'this is asians description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'asiansex',
        'description' =>'this is asiansex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'ass',
        'description' =>'this is ass description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'ass',
        'description' =>'this is ass description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'asses',
        'description' =>'this is asses description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'assfuck',
        'description' =>'this is assfuck description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'assfucked',
        'description' =>'this is assfucked description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'assfucking',
        'description' =>'this is assfucking description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'asshole',
        'description' =>'this is asshole description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'assholes',
        'description' =>'this is assholes description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'asslick',
        'description' =>'this is asslick description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'asslicking',
        'description' =>'this is asslicking description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'asstomouth',
        'description' =>'this is asstomouth description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'athletic',
        'description' =>'this is athletic description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'atm',
        'description' =>'this is atm description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'audition',
        'description' =>'this is audition description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'aunty',
        'description' =>'this is aunty description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'aussie',
        'description' =>'this is aussie description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'australian',
        'description' =>'this is australian description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'awesome',
        'description' =>'this is awesome description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'babe',
        'description' =>'this is babe description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'babes',
        'description' =>'this is babes description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'baby',
        'description' =>'this is baby description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'babysitter',
        'description' =>'this is babysitter description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bachelorette',
        'description' =>'this is bachelorette description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'backroom',
        'description' =>'this is backroom description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'baldpussy',
        'description' =>'this is baldpussy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'balls',
        'description' =>'this is balls description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bang',
        'description' =>'this is bang description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'banged',
        'description' =>'this is banged description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'banging',
        'description' =>'this is banging description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bangla',
        'description' =>'this is bangla description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bareback',
        'description' =>'this is bareback description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'barebacksex',
        'description' =>'this is barebacksex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bath',
        'description' =>'this is bath description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bathroom',
        'description' =>'this is bathroom description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bazookas',
        'description' =>'this is bazookas description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bbc',
        'description' =>'this is bbc description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bbw',
        'description' =>'this is bbw description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bdsm',
        'description' =>'this is bdsm description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'beach',
        'description' =>'this is beach description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bear',
        'description' =>'this is bear description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'beata',
        'description' =>'this is beata description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'beautiful',
        'description' =>'this is beautiful description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'beauty',
        'description' =>'this is beauty description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bed',
        'description' =>'this is bed description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bedroom',
        'description' =>'this is bedroom description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'been',
        'description' =>'this is been description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'before',
        'description' =>'this is before description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'behind',
        'description' =>'this is behind description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'best',
        'description' =>'this is best description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bhabhi',
        'description' =>'this is bhabhi description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'big',
        'description' =>'this is big description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bigass',
        'description' =>'this is bigass description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bigasses',
        'description' =>'this is bigasses description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bigblackcock',
        'description' =>'this is bigblackcock description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bigboob',
        'description' =>'this is bigboob description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bigboobs',
        'description' =>'this is bigboobs description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bigbooty',
        'description' =>'this is bigbooty description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bigbreasts',
        'description' =>'this is bigbreasts description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bigbutt',
        'description' =>'this is bigbutt description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bigbutts',
        'description' =>'this is bigbutts description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bigcock',
        'description' =>'this is bigcock description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bigcocks',
        'description' =>'this is bigcocks description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bigdick',
        'description' =>'this is bigdick description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bigdicks',
        'description' =>'this is bigdicks description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bigdicksatsc...',
        'description' =>'this is bigdicksatsc... description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bigtit',
        'description' =>'this is bigtit description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bigtits',
        'description' =>'this is bigtits description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bigtitted',
        'description' =>'this is bigtitted description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bikini',
        'description' =>'this is bikini description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bisex',
        'description' =>'this is bisex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bisexual',
        'description' =>'this is bisexual description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bitch',
        'description' =>'this is bitch description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bizarre',
        'description' =>'this is bizarre description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bizzare',
        'description' =>'this is bizzare description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'black',
        'description' =>'this is black description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'blackcock',
        'description' =>'this is blackcock description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'blackcocks',
        'description' =>'this is blackcocks description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'blackdick',
        'description' =>'this is blackdick description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'blackdicks',
        'description' =>'this is blackdicks description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'blackgay',
        'description' =>'this is blackgay description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'blackgirl',
        'description' =>'this is blackgirl description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'blackhair',
        'description' =>'this is blackhair description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'blackporn',
        'description' =>'this is blackporn description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'blackpussy',
        'description' =>'this is blackpussy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'blacks',
        'description' =>'this is blacks description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'blacksonboys',
        'description' =>'this is blacksonboys description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'blackwoman',
        'description' =>'this is blackwoman description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'blond',
        'description' =>'this is blond description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'blonde',
        'description' =>'this is blonde description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'blondes',
        'description' =>'this is blondes description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'blondhair',
        'description' =>'this is blondhair description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'blondie',
        'description' =>'this is blondie description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'blondies',
        'description' =>'this is blondies description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'blow',
        'description' =>'this is blow description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'blowing',
        'description' =>'this is blowing description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'blowjob',
        'description' =>'this is blowjob description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'blowjobs',
        'description' =>'this is blowjobs description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'blows',
        'description' =>'this is blows description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'blue',
        'description' =>'this is blue description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'body',
        'description' =>'this is body description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bodyoil',
        'description' =>'this is bodyoil description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bondage',
        'description' =>'this is bondage description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'boob',
        'description' =>'this is boob description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'boobies',
        'description' =>'this is boobies description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'boobs',
        'description' =>'this is boobs description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'booties',
        'description' =>'this is booties description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'boots',
        'description' =>'this is boots description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'booty',
        'description' =>'this is booty description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'boquete',
        'description' =>'this is boquete description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bosom',
        'description' =>'this is bosom description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'boss',
        'description' =>'this is boss description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bottom',
        'description' =>'this is bottom description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bounce',
        'description' =>'this is bounce description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bouncing',
        'description' =>'this is bouncing description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bound',
        'description' =>'this is bound description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'boy',
        'description' =>'this is boy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'boyfriend',
        'description' =>'this is boyfriend description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'boys',
        'description' =>'this is boys description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'brasil',
        'description' =>'this is brasil description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'brasileira',
        'description' =>'this is brasileira description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'brazil',
        'description' =>'this is brazil description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'brazilian',
        'description' =>'this is brazilian description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'brazzers',
        'description' =>'this is brazzers description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'breast',
        'description' =>'this is breast description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'breasts',
        'description' =>'this is breasts description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'breeding',
        'description' =>'this is breeding description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bribe',
        'description' =>'this is bribe description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'british',
        'description' =>'this is british description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'brother',
        'description' =>'this is brother description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'brown',
        'description' =>'this is brown description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'brownhair',
        'description' =>'this is brownhair description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'brunette',
        'description' =>'this is brunette description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'brunettes',
        'description' =>'this is brunettes description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'brutal',
        'description' =>'this is brutal description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bubble',
        'description' =>'this is bubble description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bubblebutt',
        'description' =>'this is bubblebutt description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'buceta',
        'description' =>'this is buceta description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bukake',
        'description' =>'this is bukake description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bukakke',
        'description' =>'this is bukakke description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bukkake',
        'description' =>'this is bukkake description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bullshit',
        'description' =>'this is bullshit description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bunda',
        'description' =>'this is bunda description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bus',
        'description' =>'this is bus description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bush',
        'description' =>'this is bush description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'bushy',
        'description' =>'this is bushy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'busty',
        'description' =>'this is busty description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'butt',
        'description' =>'this is butt description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'buttfuck',
        'description' =>'this is buttfuck description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'buttfucking',
        'description' =>'this is buttfucking description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'butthole',
        'description' =>'this is butthole description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'butts',
        'description' =>'this is butts description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'buttsex',
        'description' =>'this is buttsex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'caiu',
        'description' =>'this is caiu description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'caliente',
        'description' =>'this is caliente description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cam',
        'description' =>'this is cam description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'camel',
        'description' =>'this is camel description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cameltoe',
        'description' =>'this is cameltoe description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'camera',
        'description' =>'this is camera description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'camgirl',
        'description' =>'this is camgirl description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'camgirls',
        'description' =>'this is camgirls description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'camporn',
        'description' =>'this is camporn description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'campus',
        'description' =>'this is campus description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'camrip',
        'description' =>'this is camrip description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cams',
        'description' =>'this is cams description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'camsex',
        'description' =>'this is camsex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'camshow',
        'description' =>'this is camshow description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'camwhore',
        'description' =>'this is camwhore description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'candid',
        'description' =>'this is candid description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cans',
        'description' =>'this is cans description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'car',
        'description' =>'this is car description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'caribbean',
        'description' =>'this is caribbean description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'carsex',
        'description' =>'this is carsex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cartoon',
        'description' =>'this is cartoon description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'casada',
        'description' =>'this is casada description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'casal',
        'description' =>'this is casal description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'caseiro',
        'description' =>'this is caseiro description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'casero',
        'description' =>'this is casero description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cash',
        'description' =>'this is cash description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'casting',
        'description' =>'this is casting description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'caucasian',
        'description' =>'this is caucasian description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'caught',
        'description' =>'this is caught description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cbt',
        'description' =>'this is cbt description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'celeb',
        'description' =>'this is celeb description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'celebrities',
        'description' =>'this is celebrities description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'celebrity',
        'description' =>'this is celebrity description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'centerfold',
        'description' =>'this is centerfold description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cfnm',
        'description' =>'this is cfnm description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'chat',
        'description' =>'this is chat description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'chatroom',
        'description' =>'this is chatroom description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'chatting',
        'description' =>'this is chatting description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'chaturbate',
        'description' =>'this is chaturbate description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cheat',
        'description' =>'this is cheat description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cheater',
        'description' =>'this is cheater description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cheaters',
        'description' =>'this is cheaters description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cheating',
        'description' =>'this is cheating description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'check',
        'description' =>'this is check description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'chica',
        'description' =>'this is chica description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'chick',
        'description' =>'this is chick description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'chicks',
        'description' =>'this is chicks description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'chile',
        'description' =>'this is chile description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'chilena',
        'description' =>'this is chilena description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'china',
        'description' =>'this is china description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'chinese',
        'description' =>'this is chinese description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'chocolate',
        'description' =>'this is chocolate description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'choke',
        'description' =>'this is choke description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'chubby',
        'description' =>'this is chubby description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'chunky',
        'description' =>'this is chunky description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'chupando',
        'description' =>'this is chupando description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'class',
        'description' =>'this is class description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'classic',
        'description' =>'this is classic description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'classroom',
        'description' =>'this is classroom description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'classy',
        'description' =>'this is classy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cleavage',
        'description' =>'this is cleavage description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>' ',
        'description' =>'this is   description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'clip',
        'description' =>'this is clip description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'clit',
        'description' =>'this is clit description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'clitoris',
        'description' =>'this is clitoris description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'close',
        'description' =>'this is close description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'closeup',
        'description' =>'this is closeup description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'closeups',
        'description' =>'this is closeups description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'clothed',
        'description' =>'this is clothed description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'club',
        'description' =>'this is club description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cock',
        'description' =>'this is cock description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cocks',
        'description' =>'this is cocks description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cocksuck',
        'description' =>'this is cocksuck description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cocksucker',
        'description' =>'this is cocksucker description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cocksuckers',
        'description' =>'this is cocksuckers description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cocksucking',
        'description' =>'this is cocksucking description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'codes',
        'description' =>'this is codes description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'coed',
        'description' =>'this is coed description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'coeds',
        'description' =>'this is coeds description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cogida',
        'description' =>'this is cogida description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cogiendo',
        'description' =>'this is cogiendo description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'coldcash',
        'description' =>'this is coldcash description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'colegiala',
        'description' =>'this is colegiala description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'college',
        'description' =>'this is college description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'collegerules',
        'description' =>'this is collegerules description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'collegesex',
        'description' =>'this is collegesex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'colombia',
        'description' =>'this is colombia description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'colombian',
        'description' =>'this is colombian description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'colombiana',
        'description' =>'this is colombiana description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'com',
        'description' =>'this is com description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'compilation',
        'description' =>'this is compilation description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'con',
        'description' =>'this is con description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'condom',
        'description' =>'this is condom description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'corno',
        'description' =>'this is corno description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'coroa',
        'description' =>'this is coroa description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cosplay',
        'description' =>'this is cosplay description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'couch',
        'description' =>'this is couch description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cougar',
        'description' =>'this is cougar description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cougarmama',
        'description' =>'this is cougarmama description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cougarmom',
        'description' =>'this is cougarmom description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cougars',
        'description' =>'this is cougars description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cougarsex',
        'description' =>'this is cougarsex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'couple',
        'description' =>'this is couple description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'couples',
        'description' =>'this is couples description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cowgirl',
        'description' =>'this is cowgirl description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'crazy',
        'description' =>'this is crazy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cream',
        'description' =>'this is cream description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'creamed',
        'description' =>'this is creamed description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'creampie',
        'description' =>'this is creampie description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'creampies',
        'description' =>'this is creampies description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'creamy',
        'description' =>'this is creamy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'crossdresser',
        'description' =>'this is crossdresser description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cuban',
        'description' =>'this is cuban description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cuckold',
        'description' =>'this is cuckold description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cuckolding',
        'description' =>'this is cuckolding description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cucold',
        'description' =>'this is cucold description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'culo',
        'description' =>'this is culo description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'culona',
        'description' =>'this is culona description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cum',
        'description' =>'this is cum description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cumfacial',
        'description' =>'this is cumfacial description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cuminmouth',
        'description' =>'this is cuminmouth description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cumload',
        'description' =>'this is cumload description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cumming',
        'description' =>'this is cumming description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cumonface',
        'description' =>'this is cumonface description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cums',
        'description' =>'this is cums description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cumshot',
        'description' =>'this is cumshot description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cumshots',
        'description' =>'this is cumshots description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cumswallow',
        'description' =>'this is cumswallow description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cunnilingus',
        'description' =>'this is cunnilingus description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cunt',
        'description' =>'this is cunt description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cunteating',
        'description' =>'this is cunteating description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'curious',
        'description' =>'this is curious description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'curves',
        'description' =>'this is curves description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'curvy',
        'description' =>'this is curvy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cut',
        'description' =>'this is cut description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cute',
        'description' =>'this is cute description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cutey',
        'description' =>'this is cutey description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cutie',
        'description' =>'this is cutie description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'cuzinho',
        'description' =>'this is cuzinho description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'czech',
        'description' =>'this is czech description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'dad',
        'description' =>'this is dad description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'daddy',
        'description' =>'this is daddy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'dance',
        'description' =>'this is dance description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'dancing',
        'description' =>'this is dancing description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'dancingbear',
        'description' =>'this is dancingbear description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'danish',
        'description' =>'this is danish description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'daring',
        'description' =>'this is daring description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'dark',
        'description' =>'this is dark description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'daughter',
        'description' =>'this is daughter description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'daughters',
        'description' =>'this is daughters description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'deep',
        'description' =>'this is deep description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'deepthroat',
        'description' =>'this is deepthroat description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'defloration',
        'description' =>'this is defloration description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'deflowered',
        'description' =>'this is deflowered description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'delicia',
        'description' =>'this is delicia description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'denmark',
        'description' =>'this is denmark description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'desi',
        'description' =>'this is desi description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'desperate',
        'description' =>'this is desperate description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'deutsch',
        'description' =>'this is deutsch description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'dick',
        'description' =>'this is dick description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'dicks',
        'description' =>'this is dicks description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'dicksucking',
        'description' =>'this is dicksucking description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'dildo',
        'description' =>'this is dildo description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'dildofucking',
        'description' =>'this is dildofucking description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'dildoing',
        'description' =>'this is dildoing description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'dildos',
        'description' =>'this is dildos description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'dirty',
        'description' =>'this is dirty description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'disgrace',
        'description' =>'this is disgrace description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'dmm',
        'description' =>'this is dmm description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'dmm r',
        'description' =>'this is dmm r description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'doctor',
        'description' =>'this is doctor description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'doggy',
        'description' =>'this is doggy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'doggystyle',
        'description' =>'this is doggystyle description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'dom',
        'description' =>'this is dom description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'domina',
        'description' =>'this is domina description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'dominant',
        'description' =>'this is dominant description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'domination',
        'description' =>'this is domination description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'dominatrix',
        'description' =>'this is dominatrix description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'dont',
        'description' =>'this is dont description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'dorm',
        'description' =>'this is dorm description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'dorms',
        'description' =>'this is dorms description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'dotado',
        'description' =>'this is dotado description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'double',
        'description' =>'this is double description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'doublepenetr...',
        'description' =>'this is doublepenetr... description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'download',
        'description' =>'this is download description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'dreaming',
        'description' =>'this is dreaming description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'dress',
        'description' =>'this is dress description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'during',
        'description' =>'this is during description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'dutch',
        'description' =>'this is dutch description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'dyke',
        'description' =>'this is dyke description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'dykes',
        'description' =>'this is dykes description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'eat',
        'description' =>'this is eat description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'eating',
        'description' =>'this is eating description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'eatingpussy',
        'description' =>'this is eatingpussy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'ebony',
        'description' =>'this is ebony description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'ebonyporn',
        'description' =>'this is ebonyporn description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'een',
        'description' =>'this is een description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'ejaculation',
        'description' =>'this is ejaculation description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'ejaculations',
        'description' =>'this is ejaculations description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'emo',
        'description' =>'this is emo description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'enema',
        'description' =>'this is enema description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'english',
        'description' =>'this is english description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'enjoy',
        'description' =>'this is enjoy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'enjoying',
        'description' =>'this is enjoying description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'erotic',
        'description' =>'this is erotic description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'erotica',
        'description' =>'this is erotica description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'escort',
        'description' =>'this is escort description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'esposa',
        'description' =>'this is esposa description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'ethnic',
        'description' =>'this is ethnic description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'euro',
        'description' =>'this is euro description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'eurobabe',
        'description' =>'this is eurobabe description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'europe',
        'description' =>'this is europe description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'european',
        'description' =>'this is european description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'eurosex',
        'description' =>'this is eurosex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'exgf',
        'description' =>'this is exgf description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'exgfs',
        'description' =>'this is exgfs description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'exgirlfriend',
        'description' =>'this is exgirlfriend description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'exhibitionist',
        'description' =>'this is exhibitionist description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'exotic',
        'description' =>'this is exotic description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'extreme',
        'description' =>'this is extreme description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'extremely',
        'description' =>'this is extremely description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'face',
        'description' =>'this is face description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'facefuck',
        'description' =>'this is facefuck description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'facesitting',
        'description' =>'this is facesitting description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'facial',
        'description' =>'this is facial description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'facialized',
        'description' =>'this is facialized description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'facials',
        'description' =>'this is facials description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'fake',
        'description' =>'this is fake description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'family',
        'description' =>'this is family description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'fan',
        'description' =>'this is fan description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'fantasy',
        'description' =>'this is fantasy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'fat',
        'description' =>'this is fat description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'father',
        'description' =>'this is father description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'fatty',
        'description' =>'this is fatty description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'feet',
        'description' =>'this is feet description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'fellatio',
        'description' =>'this is fellatio description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'female',
        'description' =>'this is female description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'femdom',
        'description' =>'this is femdom description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'fetish',
        'description' =>'this is fetish description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'ffm',
        'description' =>'this is ffm description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'filipina',
        'description' =>'this is filipina description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'filmed',
        'description' =>'this is filmed description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'finger',
        'description' =>'this is finger description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'fingering',
        'description' =>'this is fingering description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'fingers',
        'description' =>'this is fingers description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'first',
        'description' =>'this is first description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'firstime',
        'description' =>'this is firstime description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'firsttime',
        'description' =>'this is firsttime description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'firsttimeanal',
        'description' =>'this is firsttimeanal description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'fishnet',
        'description' =>'this is fishnet description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'fist',
        'description' =>'this is fist description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'fisting',
        'description' =>'this is fisting description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'flagra',
        'description' =>'this is flagra description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'flashing',
        'description' =>'this is flashing description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'floor',
        'description' =>'this is floor description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'foda',
        'description' =>'this is foda description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'food',
        'description' =>'this is food description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'foot',
        'description' =>'this is foot description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'footfetish',
        'description' =>'this is footfetish description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'footjob',
        'description' =>'this is footjob description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'for',
        'description' =>'this is for description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'forced',
        'description' =>'this is forced description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'foreplay',
        'description' =>'this is foreplay description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'forest',
        'description' =>'this is forest description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'forwomen',
        'description' =>'this is forwomen description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'foursome',
        'description' =>'this is foursome description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'francaise',
        'description' =>'this is francaise description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'frat',
        'description' =>'this is frat description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'fraternity',
        'description' =>'this is fraternity description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'freak',
        'description' =>'this is freak description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'freckles',
        'description' =>'this is freckles description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'free',
        'description' =>'this is free description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'freeteenporn',
        'description' =>'this is freeteenporn description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'french',
        'description' =>'this is french description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'fresh',
        'description' =>'this is fresh description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'friend',
        'description' =>'this is friend description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'friends',
        'description' =>'this is friends description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'from',
        'description' =>'this is from description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'frombehind',
        'description' =>'this is frombehind description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'fuck',
        'description' =>'this is fuck description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'fucked',
        'description' =>'this is fucked description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'fuckingmachi...',
        'description' =>'this is fuckingmachi... description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'fucks',
        'description' =>'this is fucks description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'full',
        'description' =>'this is full description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'fun',
        'description' =>'this is fun description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'funbags',
        'description' =>'this is funbags description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'funk',
        'description' =>'this is funk description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'funny',
        'description' =>'this is funny description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gag',
        'description' =>'this is gag description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gagging',
        'description' =>'this is gagging description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'games',
        'description' =>'this is games description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gang',
        'description' =>'this is gang description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gangbang',
        'description' =>'this is gangbang description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gape',
        'description' =>'this is gape description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gaping',
        'description' =>'this is gaping description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gay',
        'description' =>'this is gay description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gayathletic',
        'description' =>'this is gayathletic description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gaybarebacksex',
        'description' =>'this is gaybarebacksex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gayblowjob',
        'description' =>'this is gayblowjob description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gaybukkake',
        'description' =>'this is gaybukkake description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gayclips',
        'description' =>'this is gayclips description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gaycock',
        'description' =>'this is gaycock description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gaycreeps',
        'description' =>'this is gaycreeps description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gaycum',
        'description' =>'this is gaycum description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gaydick',
        'description' =>'this is gaydick description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gaydudes',
        'description' =>'this is gaydudes description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gayemo',
        'description' =>'this is gayemo description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gayfuck',
        'description' =>'this is gayfuck description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gaygroup',
        'description' =>'this is gaygroup description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gaygroupsex',
        'description' =>'this is gaygroupsex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gayhardcore',
        'description' =>'this is gayhardcore description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gayhaze',
        'description' =>'this is gayhaze description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gaymassage',
        'description' =>'this is gaymassage description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gaymen',
        'description' =>'this is gaymen description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gaymovies',
        'description' =>'this is gaymovies description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gayorgy',
        'description' =>'this is gayorgy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gayporn',
        'description' =>'this is gayporn description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gayporno',
        'description' =>'this is gayporno description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gays',
        'description' =>'this is gays description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gaysex',
        'description' =>'this is gaysex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gaystraight',
        'description' =>'this is gaystraight description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gayteen',
        'description' =>'this is gayteen description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gayz',
        'description' =>'this is gayz description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'geek',
        'description' =>'this is geek description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'geile',
        'description' =>'this is geile description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'german',
        'description' =>'this is german description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gets',
        'description' =>'this is gets description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'getting',
        'description' =>'this is getting description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gfs',
        'description' =>'this is gfs description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'ghetto',
        'description' =>'this is ghetto description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gilf',
        'description' =>'this is gilf description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'girl',
        'description' =>'this is girl description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'girlfriend',
        'description' =>'this is girlfriend description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'girlfriends',
        'description' =>'this is girlfriends description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'girlnextdoor',
        'description' =>'this is girlnextdoor description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'girlongirl',
        'description' =>'this is girlongirl description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'girls',
        'description' =>'this is girls description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'girlsfucking',
        'description' =>'this is girlsfucking description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'glamcore',
        'description' =>'this is glamcore description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'glamorous',
        'description' =>'this is glamorous description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'glamour',
        'description' =>'this is glamour description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'glass',
        'description' =>'this is glass description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>' ',
        'description' =>'this is   description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'glasses',
        'description' =>'this is glasses description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gloryhole',
        'description' =>'this is gloryhole description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gloryholes',
        'description' =>'this is gloryholes description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'golden',
        'description' =>'this is golden description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'goldenshower',
        'description' =>'this is goldenshower description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'goldenshowers',
        'description' =>'this is goldenshowers description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gonzo',
        'description' =>'this is gonzo description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'goo',
        'description' =>'this is goo description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'good',
        'description' =>'this is good description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gorgeous',
        'description' =>'this is gorgeous description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gostosa',
        'description' =>'this is gostosa description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gostoso',
        'description' =>'this is gostoso description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'goth',
        'description' =>'this is goth description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gozada',
        'description' =>'this is gozada description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gozando',
        'description' =>'this is gozando description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'grande',
        'description' =>'this is grande description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'grandma',
        'description' =>'this is grandma description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'grannie',
        'description' =>'this is grannie description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'granny',
        'description' =>'this is granny description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'great',
        'description' =>'this is great description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'group',
        'description' =>'this is group description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'groupfuck',
        'description' =>'this is groupfuck description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'groupsex',
        'description' =>'this is groupsex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'guy',
        'description' =>'this is guy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'guys',
        'description' =>'this is guys description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gym',
        'description' =>'this is gym description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'gyno',
        'description' =>'this is gyno description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hair',
        'description' =>'this is hair description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hairy',
        'description' =>'this is hairy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hairypussy',
        'description' =>'this is hairypussy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hand',
        'description' =>'this is hand description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'handjob',
        'description' =>'this is handjob description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'handjobs',
        'description' =>'this is handjobs description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'harcore',
        'description' =>'this is harcore description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hard',
        'description' =>'this is hard description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hardcock',
        'description' =>'this is hardcock description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hardcore',
        'description' =>'this is hardcore description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hardcoresex',
        'description' =>'this is hardcoresex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hardfuck',
        'description' =>'this is hardfuck description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hardsex',
        'description' =>'this is hardsex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'having',
        'description' =>'this is having description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'haze',
        'description' =>'this is haze description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hazed',
        'description' =>'this is hazed description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hazegay',
        'description' =>'this is hazegay description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hazehim',
        'description' =>'this is hazehim description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hazing',
        'description' =>'this is hazing description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'head',
        'description' =>'this is head description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'heels',
        'description' =>'this is heels description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hentai',
        'description' =>'this is hentai description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'her',
        'description' =>'this is her description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'herself',
        'description' =>'this is herself description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hetero',
        'description' =>'this is hetero description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hidden',
        'description' =>'this is hidden description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hiddencam',
        'description' =>'this is hiddencam description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'high',
        'description' =>'this is high description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'highdef',
        'description' =>'this is highdef description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'highdefinition',
        'description' =>'this is highdefinition description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'highheels',
        'description' =>'this is highheels description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'highschool',
        'description' =>'this is highschool description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hitchhiker',
        'description' =>'this is hitchhiker description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hitchhikers',
        'description' =>'this is hitchhikers description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hoe',
        'description' =>'this is hoe description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hole',
        'description' =>'this is hole description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'holes',
        'description' =>'this is holes description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hollywood',
        'description' =>'this is hollywood description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'home',
        'description' =>'this is home description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'homemade',
        'description' =>'this is homemade description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'homemovie',
        'description' =>'this is homemovie description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'homemovies',
        'description' =>'this is homemovies description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'homevideo',
        'description' =>'this is homevideo description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'homevideos',
        'description' =>'this is homevideos description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'homo',
        'description' =>'this is homo description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'homocouple',
        'description' =>'this is homocouple description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'homosexual',
        'description' =>'this is homosexual description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hood',
        'description' =>'this is hood description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hoods',
        'description' =>'this is hoods description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hooker',
        'description' =>'this is hooker description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hooters',
        'description' =>'this is hooters description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'horny',
        'description' =>'this is horny description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hospital',
        'description' =>'this is hospital description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hot',
        'description' =>'this is hot description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hotel',
        'description' =>'this is hotel description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hotfuck',
        'description' =>'this is hotfuck description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hotporn',
        'description' =>'this is hotporn description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hotsex',
        'description' =>'this is hotsex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hottie',
        'description' =>'this is hottie description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'housewife',
        'description' =>'this is housewife description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'housewives',
        'description' =>'this is housewives description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'huge',
        'description' =>'this is huge description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hugeblack',
        'description' =>'this is hugeblack description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hugecock',
        'description' =>'this is hugecock description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hugedick',
        'description' =>'this is hugedick description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hugetits',
        'description' =>'this is hugetits description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'humiliate',
        'description' =>'this is humiliate description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'humiliated',
        'description' =>'this is humiliated description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'humiliation',
        'description' =>'this is humiliation description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hung',
        'description' =>'this is hung description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hunk',
        'description' =>'this is hunk description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hunks',
        'description' =>'this is hunks description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hunter',
        'description' =>'this is hunter description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'husband',
        'description' =>'this is husband description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'hymen',
        'description' =>'this is hymen description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'idol',
        'description' =>'this is idol description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'idols',
        'description' =>'this is idols description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'incredible',
        'description' =>'this is incredible description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'india',
        'description' =>'this is india description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'indian',
        'description' =>'this is indian description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'individual',
        'description' =>'this is individual description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'infiel',
        'description' =>'this is infiel description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'ink',
        'description' =>'this is ink description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'innocent',
        'description' =>'this is innocent description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'insane',
        'description' =>'this is insane description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'insertion',
        'description' =>'this is insertion description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'inside',
        'description' =>'this is inside description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'interacial',
        'description' =>'this is interacial description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'internal',
        'description' =>'this is internal description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'interracial',
        'description' =>'this is interracial description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'interracialsex',
        'description' =>'this is interracialsex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'interview',
        'description' =>'this is interview description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'italian',
        'description' =>'this is italian description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'itsgonnahurt',
        'description' =>'this is itsgonnahurt description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'jacking',
        'description' =>'this is jacking description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'jap',
        'description' =>'this is jap description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'japan',
        'description' =>'this is japan description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'japanese',
        'description' =>'this is japanese description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'japanesemilf',
        'description' =>'this is japanesemilf description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'japansex',
        'description' =>'this is japansex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'jav',
        'description' =>'this is jav description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'jeans',
        'description' =>'this is jeans description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'jerk',
        'description' =>'this is jerk description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'jerking',
        'description' =>'this is jerking description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'jerkingoff',
        'description' =>'this is jerkingoff description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'jerkoff',
        'description' =>'this is jerkoff description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'jizz',
        'description' =>'this is jizz description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'jizzed',
        'description' =>'this is jizzed description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'job',
        'description' =>'this is job description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'jock',
        'description' =>'this is jock description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'jocks',
        'description' =>'this is jocks description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'joi',
        'description' =>'this is joi description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'jovencita',
        'description' =>'this is jovencita description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'jpmilfs',
        'description' =>'this is jpmilfs description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'juggs',
        'description' =>'this is juggs description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'jugs',
        'description' =>'this is jugs description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'juicy',
        'description' =>'this is juicy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'kelly',
        'description' =>'this is kelly description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'killer',
        'description' =>'this is killer description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'kink',
        'description' =>'this is kink description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'kinky',
        'description' =>'this is kinky description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'kiss',
        'description' =>'this is kiss description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'kissing',
        'description' =>'this is kissing description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'kitchen',
        'description' =>'this is kitchen description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'knockers',
        'description' =>'this is knockers description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'korea',
        'description' =>'this is korea description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'korean',
        'description' =>'this is korean description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'labia',
        'description' =>'this is labia description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'lady',
        'description' =>'this is lady description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'ladyboy',
        'description' =>'this is ladyboy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'ladyboys',
        'description' =>'this is ladyboys description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'large',
        'description' =>'this is large description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'latex',
        'description' =>'this is latex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'latin',
        'description' =>'this is latin description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'latina',
        'description' =>'this is latina description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'latinas',
        'description' =>'this is latinas description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'latinasex',
        'description' =>'this is latinasex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'latino',
        'description' =>'this is latino description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'leaked',
        'description' =>'this is leaked description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'leakedvideo',
        'description' =>'this is leakedvideo description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'leather',
        'description' =>'this is leather description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'leche',
        'description' =>'this is leche description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'lee',
        'description' =>'this is lee description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'legs',
        'description' =>'this is legs description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'les',
        'description' =>'this is les description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'lesb',
        'description' =>'this is lesb description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'lesbi',
        'description' =>'this is lesbi description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'lesbian',
        'description' =>'this is lesbian description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'lesbianas',
        'description' =>'this is lesbianas description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'lesbians',
        'description' =>'this is lesbians description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'lesbiansex',
        'description' =>'this is lesbiansex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'lesbo',
        'description' =>'this is lesbo description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'lesbos',
        'description' =>'this is lesbos description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'lez',
        'description' =>'this is lez description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'lezbian',
        'description' =>'this is lezbian description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'lezbo',
        'description' =>'this is lezbo description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'lezbos',
        'description' =>'this is lezbos description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'lezdom',
        'description' =>'this is lezdom description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'lezz',
        'description' =>'this is lezz description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'lezzies',
        'description' =>'this is lezzies description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'lick',
        'description' =>'this is lick description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'licking',
        'description' =>'this is licking description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'like',
        'description' =>'this is like description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'lima',
        'description' =>'this is lima description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'linda',
        'description' =>'this is linda description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'lingerie',
        'description' =>'this is lingerie description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'lips',
        'description' =>'this is lips description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'little',
        'description' =>'this is little description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'live',
        'description' =>'this is live description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'livecam',
        'description' =>'this is livecam description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'livecams',
        'description' =>'this is livecams description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'livesex',
        'description' =>'this is livesex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'liveshow',
        'description' =>'this is liveshow description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'load',
        'description' =>'this is load description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'loca',
        'description' =>'this is loca description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'login',
        'description' =>'this is login description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'loira',
        'description' =>'this is loira description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'lolita',
        'description' =>'this is lolita description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'long',
        'description' =>'this is long description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'love',
        'description' =>'this is love description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'lover',
        'description' =>'this is lover description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'lovers',
        'description' =>'this is lovers description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'loves',
        'description' =>'this is loves description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'lowjob',
        'description' =>'this is lowjob description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'luxury',
        'description' =>'this is luxury description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'machine',
        'description' =>'this is machine description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'made',
        'description' =>'this is made description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'madura',
        'description' =>'this is madura description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'maid',
        'description' =>'this is maid description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'make',
        'description' =>'this is make description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'making',
        'description' =>'this is making description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'male',
        'description' =>'this is male description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'maledom',
        'description' =>'this is maledom description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'mallu',
        'description' =>'this is mallu description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'mama',
        'description' =>'this is mama description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'mamada',
        'description' =>'this is mamada description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'mamando',
        'description' =>'this is mamando description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'mami',
        'description' =>'this is mami description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'man',
        'description' =>'this is man description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'mandingo',
        'description' =>'this is mandingo description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'marie',
        'description' =>'this is marie description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'married',
        'description' =>'this is married description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'massage',
        'description' =>'this is massage description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'massages',
        'description' =>'this is massages description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'masseur',
        'description' =>'this is masseur description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'masseuse',
        'description' =>'this is masseuse description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'massive',
        'description' =>'this is massive description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'master',
        'description' =>'this is master description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'masterbate',
        'description' =>'this is masterbate description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'masterbation',
        'description' =>'this is masterbation description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'masturbacion',
        'description' =>'this is masturbacion description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'masturbate',
        'description' =>'this is masturbate description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'masturbates',
        'description' =>'this is masturbates description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'masturbating',
        'description' =>'this is masturbating description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'masturbation',
        'description' =>'this is masturbation description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'masturbations',
        'description' =>'this is masturbations description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'mature',
        'description' =>'this is mature description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'matureasian',
        'description' =>'this is matureasian description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'matures',
        'description' =>'this is matures description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'mean',
        'description' =>'this is mean description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'medical',
        'description' =>'this is medical description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'members',
        'description' =>'this is members description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'men',
        'description' =>'this is men description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'messy',
        'description' =>'this is messy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'mexican',
        'description' =>'this is mexican description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'mexicana',
        'description' =>'this is mexicana description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'mexicanas',
        'description' =>'this is mexicanas description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'mexicano',
        'description' =>'this is mexicano description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'mexico',
        'description' =>'this is mexico description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'milf',
        'description' =>'this is milf description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'milfhunter',
        'description' =>'this is milfhunter description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'milfs',
        'description' =>'this is milfs description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'milfsex',
        'description' =>'this is milfsex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'milk',
        'description' =>'this is milk description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'mirror',
        'description' =>'this is mirror description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'missionary',
        'description' =>'this is missionary description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'mistress',
        'description' =>'this is mistress description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'mmf',
        'description' =>'this is mmf description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'moaning',
        'description' =>'this is moaning description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'mocha',
        'description' =>'this is mocha description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'model',
        'description' =>'this is model description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'models',
        'description' =>'this is models description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'mofos',
        'description' =>'this is mofos description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'mom',
        'description' =>'this is mom description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'mommy',
        'description' =>'this is mommy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'moms',
        'description' =>'this is moms description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'money',
        'description' =>'this is money description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'moneytalks',
        'description' =>'this is moneytalks description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'monster',
        'description' =>'this is monster description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'monsterblack',
        'description' =>'this is monsterblack description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'monstercock',
        'description' =>'this is monstercock description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'monstercocks',
        'description' =>'this is monstercocks description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'morena',
        'description' =>'this is morena description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>' ',
        'description' =>'this is   description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'morning',
        'description' =>'this is morning description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'most',
        'description' =>'this is most description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'motel',
        'description' =>'this is motel description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'mother',
        'description' =>'this is mother description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'mouth',
        'description' =>'this is mouth description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'movie',
        'description' =>'this is movie description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'movies',
        'description' =>'this is movies description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'muffdiving',
        'description' =>'this is muffdiving description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'mulata',
        'description' =>'this is mulata description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'muscle',
        'description' =>'this is muscle description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'muscled',
        'description' =>'this is muscled description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'muscular',
        'description' =>'this is muscular description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'music',
        'description' =>'this is music description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'muslim',
        'description' =>'this is muslim description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'naked',
        'description' =>'this is naked description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'nalgona',
        'description' =>'this is nalgona description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'namorada',
        'description' =>'this is namorada description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'nasty',
        'description' =>'this is nasty description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'natasha',
        'description' =>'this is natasha description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'natural',
        'description' =>'this is natural description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'naturaltits',
        'description' =>'this is naturaltits description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'naughty',
        'description' =>'this is naughty description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'need',
        'description' =>'this is need description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'negao',
        'description' =>'this is negao description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'negra',
        'description' =>'this is negra description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'net',
        'description' =>'this is net description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'new',
        'description' =>'this is new description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'newbie',
        'description' =>'this is newbie description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'nextdoor',
        'description' =>'this is nextdoor description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'nice',
        'description' =>'this is nice description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'nicole',
        'description' =>'this is nicole description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'night',
        'description' =>'this is night description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'nightclub',
        'description' =>'this is nightclub description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'ninfeta',
        'description' =>'this is ninfeta description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'nipple',
        'description' =>'this is nipple description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'nipples',
        'description' =>'this is nipples description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'novia',
        'description' =>'this is novia description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'novinha',
        'description' =>'this is novinha description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'novinho',
        'description' =>'this is novinho description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'nubian',
        'description' =>'this is nubian description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'nubile',
        'description' =>'this is nubile description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'nude',
        'description' =>'this is nude description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'nudity',
        'description' =>'this is nudity description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'nurse',
        'description' =>'this is nurse description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'nuru',
        'description' =>'this is nuru description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'nylon',
        'description' =>'this is nylon description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'nylons',
        'description' =>'this is nylons description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'off',
        'description' =>'this is off description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'office',
        'description' =>'this is office description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'officesex',
        'description' =>'this is officesex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'oil',
        'description' =>'this is oil description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'oiled',
        'description' =>'this is oiled description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'oiledup',
        'description' =>'this is oiledup description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'old',
        'description' =>'this is old description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'oldandyoung',
        'description' =>'this is oldandyoung description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'older',
        'description' =>'this is older description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'olderwoman',
        'description' =>'this is olderwoman description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'oldman',
        'description' =>'this is oldman description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'oldvsyoung',
        'description' =>'this is oldvsyoung description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'omegle',
        'description' =>'this is omegle description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'one',
        'description' =>'this is one description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'online',
        'description' =>'this is online description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'only',
        'description' =>'this is only description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'ontop',
        'description' =>'this is ontop description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'opening',
        'description' =>'this is opening description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'oral',
        'description' =>'this is oral description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'oralsex',
        'description' =>'this is oralsex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'orgasm',
        'description' =>'this is orgasm description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'orgasms',
        'description' =>'this is orgasms description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'orgia',
        'description' =>'this is orgia description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'orgies',
        'description' =>'this is orgies description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'orgy',
        'description' =>'this is orgy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'oriental',
        'description' =>'this is oriental description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'orientalsex',
        'description' =>'this is orientalsex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'original',
        'description' =>'this is original description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'other',
        'description' =>'this is other description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'outdoor',
        'description' =>'this is outdoor description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'outdoors',
        'description' =>'this is outdoors description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'outdoorsex',
        'description' =>'this is outdoorsex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'outside',
        'description' =>'this is outside description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'paid',
        'description' =>'this is paid description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pain',
        'description' =>'this is pain description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'painal',
        'description' =>'this is painal description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'painful',
        'description' =>'this is painful description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'paja',
        'description' =>'this is paja description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pale',
        'description' =>'this is pale description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'panties',
        'description' =>'this is panties description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'panty',
        'description' =>'this is panty description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pantyhose',
        'description' =>'this is pantyhose description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'parties',
        'description' =>'this is parties description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'party',
        'description' =>'this is party description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'partyhardcore',
        'description' =>'this is partyhardcore description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'passion',
        'description' =>'this is passion description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'passionate',
        'description' =>'this is passionate description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pau',
        'description' =>'this is pau description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pawg',
        'description' =>'this is pawg description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pawn',
        'description' =>'this is pawn description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pawnshop',
        'description' =>'this is pawnshop description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pay',
        'description' =>'this is pay description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pee',
        'description' =>'this is pee description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'peeing',
        'description' =>'this is peeing description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'peeping',
        'description' =>'this is peeping description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'peepingtom',
        'description' =>'this is peepingtom description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pegging',
        'description' =>'this is pegging description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'peituda',
        'description' =>'this is peituda description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pelada',
        'description' =>'this is pelada description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pendeja',
        'description' =>'this is pendeja description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pene',
        'description' =>'this is pene description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'penetration',
        'description' =>'this is penetration description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'penis',
        'description' =>'this is penis description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'people',
        'description' =>'this is people description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'perfect',
        'description' =>'this is perfect description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'perra',
        'description' =>'this is perra description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'person',
        'description' =>'this is person description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'peru',
        'description' =>'this is peru description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'peruana',
        'description' =>'this is peruana description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pervers',
        'description' =>'this is pervers description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pervert',
        'description' =>'this is pervert description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'petite',
        'description' =>'this is petite description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'phatass',
        'description' =>'this is phatass description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pickup',
        'description' =>'this is pickup description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pickups',
        'description' =>'this is pickups description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pie',
        'description' =>'this is pie description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'piercing',
        'description' =>'this is piercing description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pies',
        'description' =>'this is pies description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pigtail',
        'description' =>'this is pigtail description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pinay',
        'description' =>'this is pinay description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pink',
        'description' =>'this is pink description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pinkpussy',
        'description' =>'this is pinkpussy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pinoy',
        'description' =>'this is pinoy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'piss',
        'description' =>'this is piss description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pissing',
        'description' =>'this is pissing description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'play',
        'description' =>'this is play description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'playboy',
        'description' =>'this is playboy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'playing',
        'description' =>'this is playing description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'plump',
        'description' =>'this is plump description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'plumper',
        'description' =>'this is plumper description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pool',
        'description' =>'this is pool description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'porn',
        'description' =>'this is porn description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'porno',
        'description' =>'this is porno description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pornstar',
        'description' =>'this is pornstar description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pornstars',
        'description' =>'this is pornstars description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'posing',
        'description' =>'this is posing description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pounding',
        'description' =>'this is pounding description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'POV',
        'description' =>'this is POV description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pregnant',
        'description' =>'this is pregnant description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pretty',
        'description' =>'this is pretty description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'price',
        'description' =>'this is price description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'prima',
        'description' =>'this is prima description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'princess',
        'description' =>'this is princess description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'private',
        'description' =>'this is private description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'prodomme',
        'description' =>'this is prodomme description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'prostitute',
        'description' =>'this is prostitute description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'prostitutes',
        'description' =>'this is prostitutes description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'prostitution',
        'description' =>'this is prostitution description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'public',
        'description' =>'this is public description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'publicporn',
        'description' =>'this is publicporn description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'publicsex',
        'description' =>'this is publicsex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'publicsexjapan',
        'description' =>'this is publicsexjapan description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pulling',
        'description' =>'this is pulling description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'punheta',
        'description' =>'this is punheta description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'punish',
        'description' =>'this is punish description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'punishment',
        'description' =>'this is punishment description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'punk',
        'description' =>'this is punk description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pure',
        'description' =>'this is pure description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pure',
        'description' =>'this is pure description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pussies',
        'description' =>'this is pussies description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pussy',
        'description' =>'this is pussy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pussyeating',
        'description' =>'this is pussyeating description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pussyfuck',
        'description' =>'this is pussyfuck description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pussyfucking',
        'description' =>'this is pussyfucking description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pussylick',
        'description' =>'this is pussylick description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pussylicking',
        'description' =>'this is pussylicking description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pussyrubbing',
        'description' =>'this is pussyrubbing description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pussysex',
        'description' =>'this is pussysex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'pussytomouth',
        'description' =>'this is pussytomouth description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'puta',
        'description' =>'this is puta description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'putaria',
        'description' =>'this is putaria description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'putas',
        'description' =>'this is putas description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'putita',
        'description' =>'this is putita description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'quality',
        'description' =>'this is quality description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'rabuda',
        'description' =>'this is rabuda description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'raven',
        'description' =>'this is raven description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'raw',
        'description' =>'this is raw description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'real',
        'description' =>'this is real description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'realamateur',
        'description' =>'this is realamateur description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'reality',
        'description' =>'this is reality description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'realityporn',
        'description' =>'this is realityporn description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'reallife',
        'description' =>'this is reallife description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'realsex',
        'description' =>'this is realsex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'red',
        'description' =>'this is red description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'redbone',
        'description' =>'this is redbone description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'redhead',
        'description' =>'this is redhead description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'redtube',
        'description' =>'this is redtube description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'relax',
        'description' =>'this is relax description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'resolution',
        'description' =>'this is resolution description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'retro',
        'description' =>'this is retro description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'revenge',
        'description' =>'this is revenge description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'reversecowgirl',
        'description' =>'this is reversecowgirl description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'rica',
        'description' =>'this is rica description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'rico',
        'description' =>'this is rico description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'ride',
        'description' =>'this is ride description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'riding',
        'description' =>'this is riding description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'rimjob',
        'description' =>'this is rimjob description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'rimming',
        'description' =>'this is rimming description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'rola',
        'description' =>'this is rola description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'roleplay',
        'description' =>'this is roleplay description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'romantic',
        'description' =>'this is romantic description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'room',
        'description' =>'this is room description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'rooms',
        'description' =>'this is rooms description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'rough',
        'description' =>'this is rough description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'roughsex',
        'description' =>'this is roughsex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'rub',
        'description' =>'this is rub description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'rubbing',
        'description' =>'this is rubbing description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'rubdown',
        'description' =>'this is rubdown description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'rubhim',
        'description' =>'this is rubhim description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'rubing',
        'description' =>'this is rubing description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'ruiva',
        'description' =>'this is ruiva description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'russia',
        'description' =>'this is russia description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'russian',
        'description' =>'this is russian description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sadism',
        'description' =>'this is sadism description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'safada',
        'description' =>'this is safada description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'salope',
        'description' =>'this is salope description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sample',
        'description' =>'this is sample description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'satin',
        'description' =>'this is satin description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'scandal',
        'description' =>'this is scandal description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'scene',
        'description' =>'this is scene description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'scenes',
        'description' =>'this is scenes description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'school',
        'description' =>'this is school description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'schoolgirl',
        'description' =>'this is schoolgirl description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'schoolgirls',
        'description' =>'this is schoolgirls description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'schoolsex',
        'description' =>'this is schoolsex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'secret',
        'description' =>'this is secret description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'secretary',
        'description' =>'this is secretary description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'seduction',
        'description' =>'this is seduction description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'self',
        'description' =>'this is self description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'selfshot',
        'description' =>'this is selfshot description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'semen',
        'description' =>'this is semen description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sensual',
        'description' =>'this is sensual description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sex',
        'description' =>'this is sex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sexcam',
        'description' =>'this is sexcam description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sexcams',
        'description' =>'this is sexcams description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sexformoney',
        'description' =>'this is sexformoney description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sexo',
        'description' =>'this is sexo description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sexparty',
        'description' =>'this is sexparty description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sexprice',
        'description' =>'this is sexprice description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sexspy',
        'description' =>'this is sexspy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sextape',
        'description' =>'this is sextape description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sexteen',
        'description' =>'this is sexteen description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sextoy',
        'description' =>'this is sextoy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sextoys',
        'description' =>'this is sextoys description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sexvideo',
        'description' =>'this is sexvideo description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sexy',
        'description' =>'this is sexy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'shake',
        'description' =>'this is shake description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'shaking',
        'description' =>'this is shaking description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'shaved',
        'description' =>'this is shaved description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'shavedpussy',
        'description' =>'this is shavedpussy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'she',
        'description' =>'this is she description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'shemale',
        'description' =>'this is shemale description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'shemales',
        'description' =>'this is shemales description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'shoes',
        'description' =>'this is shoes description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'shooted',
        'description' =>'this is shooted description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'short',
        'description' =>'this is short description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'shot',
        'description' =>'this is shot description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'shots',
        'description' =>'this is shots description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'show',
        'description' =>'this is show description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'shower',
        'description' =>'this is shower description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'showing',
        'description' =>'this is showing description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'shows',
        'description' =>'this is shows description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'shy',
        'description' =>'this is shy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sissy',
        'description' =>'this is sissy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sista',
        'description' =>'this is sista description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sister',
        'description' =>'this is sister description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'site',
        'description' =>'this is site description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sizzling',
        'description' =>'this is sizzling description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'skinny',
        'description' =>'this is skinny description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'skirt',
        'description' =>'this is skirt description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'slave',
        'description' =>'this is slave description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sleeping',
        'description' =>'this is sleeping description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'slim',
        'description' =>'this is slim description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>' ',
        'description' =>'this is   description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sloppy',
        'description' =>'this is sloppy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'slut',
        'description' =>'this is slut description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sluts',
        'description' =>'this is sluts description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'slutty',
        'description' =>'this is slutty description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'small',
        'description' =>'this is small description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'smalltits',
        'description' =>'this is smalltits description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'smoking',
        'description' =>'this is smoking description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'snatch',
        'description' =>'this is snatch description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'soapy',
        'description' =>'this is soapy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'socks',
        'description' =>'this is socks description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sofa',
        'description' =>'this is sofa description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'softcore',
        'description' =>'this is softcore description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'soles',
        'description' =>'this is soles description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'solo',
        'description' =>'this is solo description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'soloboy',
        'description' =>'this is soloboy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sologirl',
        'description' =>'this is sologirl description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'some',
        'description' =>'this is some description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'son',
        'description' =>'this is son description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sorority',
        'description' =>'this is sorority description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'spa',
        'description' =>'this is spa description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'spandex',
        'description' =>'this is spandex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'spanish',
        'description' =>'this is spanish description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'spank',
        'description' =>'this is spank description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'spanking',
        'description' =>'this is spanking description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sperm',
        'description' =>'this is sperm description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'spicy',
        'description' =>'this is spicy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'spit',
        'description' =>'this is spit description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'spread',
        'description' =>'this is spread description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'spreading',
        'description' =>'this is spreading description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'spy',
        'description' =>'this is spy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'spycam',
        'description' =>'this is spycam description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'spying',
        'description' =>'this is spying description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'spyporn',
        'description' =>'this is spyporn description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'squirt',
        'description' =>'this is squirt description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'squirters',
        'description' =>'this is squirters description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'squirting',
        'description' =>'this is squirting description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'stacked',
        'description' =>'this is stacked description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'star',
        'description' =>'this is star description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'step',
        'description' =>'this is step description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'stepdad',
        'description' =>'this is stepdad description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'stepdaughter',
        'description' =>'this is stepdaughter description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'stepmom',
        'description' =>'this is stepmom description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'stepsister',
        'description' =>'this is stepsister description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'still',
        'description' =>'this is still description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'stocking',
        'description' =>'this is stocking description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'stockings',
        'description' =>'this is stockings description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'storyline',
        'description' =>'this is storyline description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'straight',
        'description' =>'this is straight description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'straightgayy...',
        'description' =>'this is straightgayy... description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'straightguy',
        'description' =>'this is straightguy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'straightguys',
        'description' =>'this is straightguys description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'stranded',
        'description' =>'this is stranded description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'stranger',
        'description' =>'this is stranger description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'strap',
        'description' =>'this is strap description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'strapon',
        'description' =>'this is strapon description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'strapons',
        'description' =>'this is strapons description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'stream',
        'description' =>'this is stream description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'street',
        'description' =>'this is street description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'stretch',
        'description' =>'this is stretch description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'strip',
        'description' =>'this is strip description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'stripper',
        'description' =>'this is stripper description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'stripping',
        'description' =>'this is stripping description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'striptease',
        'description' =>'this is striptease description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'stroking',
        'description' =>'this is stroking description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'stud',
        'description' =>'this is stud description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'student',
        'description' =>'this is student description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'students',
        'description' =>'this is students description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'studs',
        'description' =>'this is studs description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'stunning',
        'description' =>'this is stunning description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'style',
        'description' =>'this is style description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sub',
        'description' =>'this is sub description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'submission',
        'description' =>'this is submission description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'submissive',
        'description' =>'this is submissive description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'suck',
        'description' =>'this is suck description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sucking',
        'description' =>'this is sucking description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'suckingcock',
        'description' =>'this is suckingcock description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'suckingdick',
        'description' =>'this is suckingdick description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sucks',
        'description' =>'this is sucks description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'super',
        'description' =>'this is super description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'suruba',
        'description' =>'this is suruba description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'swallow',
        'description' =>'this is swallow description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'swallowing',
        'description' =>'this is swallowing description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'swap',
        'description' =>'this is swap description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sweatb',
        'description' =>'this is sweatb description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sweating',
        'description' =>'this is sweating description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sweaty',
        'description' =>'this is sweaty description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'swedish',
        'description' =>'this is swedish description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'sweet',
        'description' =>'this is sweet description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'swing',
        'description' =>'this is swing description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'swinger',
        'description' =>'this is swinger description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'swingers',
        'description' =>'this is swingers description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'table',
        'description' =>'this is table description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'taboo',
        'description' =>'this is taboo description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'taiwan',
        'description' =>'this is taiwan description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tamil',
        'description' =>'this is tamil description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tan',
        'description' =>'this is tan description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tanga',
        'description' =>'this is tanga description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tanlines',
        'description' =>'this is tanlines description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tatas',
        'description' =>'this is tatas description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tatoo',
        'description' =>'this is tatoo description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tats',
        'description' =>'this is tats description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tatto',
        'description' =>'this is tatto description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tattoo',
        'description' =>'this is tattoo description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tattooed',
        'description' =>'this is tattooed description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tattoos',
        'description' =>'this is tattoos description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'taylor',
        'description' =>'this is taylor description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'teacher',
        'description' =>'this is teacher description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tease',
        'description' =>'this is tease description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'teasing',
        'description' =>'this is teasing description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'teen',
        'description' =>'this is teen description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'teen',
        'description' =>'this is teen description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'teenage',
        'description' =>'this is teenage description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'teenager',
        'description' =>'this is teenager description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'teenagers',
        'description' =>'this is teenagers description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'teenfuns',
        'description' =>'this is teenfuns description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'teenhitchhiker',
        'description' =>'this is teenhitchhiker description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'teenie',
        'description' =>'this is teenie description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'teenies',
        'description' =>'this is teenies description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'teenlatina',
        'description' =>'this is teenlatina description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'teenporn',
        'description' =>'this is teenporn description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'teenporno',
        'description' =>'this is teenporno description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'teenpussy',
        'description' =>'this is teenpussy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'teens',
        'description' =>'this is teens description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'teensex',
        'description' =>'this is teensex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'teensexfusion',
        'description' =>'this is teensexfusion description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'teensexreality',
        'description' =>'this is teensexreality description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'teensnow',
        'description' =>'this is teensnow description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'teentube',
        'description' =>'this is teentube description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'teenxxx',
        'description' =>'this is teenxxx description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'teenxxx',
        'description' =>'this is teenxxx description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'teeny',
        'description' =>'this is teeny description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tetas',
        'description' =>'this is tetas description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tetona',
        'description' =>'this is tetona description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tetonas',
        'description' =>'this is tetonas description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tgirl',
        'description' =>'this is tgirl description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tgirls',
        'description' =>'this is tgirls description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'thai',
        'description' =>'this is thai description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'the',
        'description' =>'this is the description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'their',
        'description' =>'this is their description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'thick',
        'description' =>'this is thick description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'thin',
        'description' =>'this is thin description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'thinking',
        'description' =>'this is thinking description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'this',
        'description' =>'this is this description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'thong',
        'description' =>'this is thong description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'thot',
        'description' =>'this is thot description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'three',
        'description' =>'this is three description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'threesome',
        'description' =>'this is threesome description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'threesomes',
        'description' =>'this is threesomes description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'threeway',
        'description' =>'this is threeway description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'throat',
        'description' =>'this is throat description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'throatfuck',
        'description' =>'this is throatfuck description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tied',
        'description' =>'this is tied description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tight',
        'description' =>'this is tight description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'time',
        'description' =>'this is time description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tiny',
        'description' =>'this is tiny description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tinytits',
        'description' =>'this is tinytits description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tit',
        'description' =>'this is tit description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'titfuck',
        'description' =>'this is titfuck description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'titjob',
        'description' =>'this is titjob description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'titlicking',
        'description' =>'this is titlicking description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tits',
        'description' =>'this is tits description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'titties',
        'description' =>'this is titties description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'titty',
        'description' =>'this is titty description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tittyfuck',
        'description' =>'this is tittyfuck description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'toes',
        'description' =>'this is toes description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'toilet',
        'description' =>'this is toilet description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tokyo',
        'description' =>'this is tokyo description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'toned',
        'description' =>'this is toned description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'toon',
        'description' =>'this is toon description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'topless',
        'description' =>'this is topless description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'toy',
        'description' =>'this is toy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'toying',
        'description' =>'this is toying description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'toys',
        'description' =>'this is toys description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'toyz',
        'description' =>'this is toyz description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'trannies',
        'description' =>'this is trannies description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tranny',
        'description' =>'this is tranny description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'trans',
        'description' =>'this is trans description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'transexual',
        'description' =>'this is transexual description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'transsexual',
        'description' =>'this is transsexual description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'transvestite',
        'description' =>'this is transvestite description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'travesti',
        'description' =>'this is travesti description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tribute',
        'description' =>'this is tribute description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'trimmed',
        'description' =>'this is trimmed description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'trimmedpussy',
        'description' =>'this is trimmedpussy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'trio',
        'description' =>'this is trio description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'true',
        'description' =>'this is true description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'trying',
        'description' =>'this is trying description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tube',
        'description' =>'this is tube description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tugging',
        'description' =>'this is tugging description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'tugjob',
        'description' =>'this is tugjob description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'twerk',
        'description' =>'this is twerk description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'twerking',
        'description' =>'this is twerking description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'twink',
        'description' =>'this is twink description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'twinks',
        'description' =>'this is twinks description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'twinkstudios',
        'description' =>'this is twinkstudios description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'two',
        'description' =>'this is two description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'ultra',
        'description' =>'this is ultra description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'unbelievable',
        'description' =>'this is unbelievable description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'uncensored',
        'description' =>'this is uncensored description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'uncut',
        'description' =>'this is uncut description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'underwear',
        'description' =>'this is underwear description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'uniform',
        'description' =>'this is uniform description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'unique',
        'description' =>'this is unique description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'university',
        'description' =>'this is university description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'upskirt',
        'description' =>'this is upskirt description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'urban',
        'description' =>'this is urban description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'urine',
        'description' =>'this is urine description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'usa',
        'description' =>'this is usa description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'used',
        'description' =>'this is used description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'ussy',
        'description' =>'this is ussy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'vagina',
        'description' =>'this is vagina description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'vaginal',
        'description' =>'this is vaginal description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'van',
        'description' =>'this is van description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'verga',
        'description' =>'this is verga description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'very',
        'description' =>'this is very description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'vibrator',
        'description' =>'this is vibrator description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'vid',
        'description' =>'this is vid description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'video',
        'description' =>'this is video description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'videos',
        'description' =>'this is videos description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'viet',
        'description' =>'this is viet description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'vietnam',
        'description' =>'this is vietnam description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'vintage',
        'description' =>'this is vintage description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'violate',
        'description' =>'this is violate description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'vip',
        'description' =>'this is vip description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'virgin',
        'description' =>'this is virgin description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'visit',
        'description' =>'this is visit description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'voyer',
        'description' =>'this is voyer description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'voyeur',
        'description' =>'this is voyeur description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'voyeurs',
        'description' =>'this is voyeurs description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'voyeursex',
        'description' =>'this is voyeursex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'vulva',
        'description' =>'this is vulva description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'waiting',
        'description' =>'this is waiting description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'wam',
        'description' =>'this is wam description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'wank',
        'description' =>'this is wank description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'wanking',
        'description' =>'this is wanking description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'watch',
        'description' =>'this is watch description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'watching',
        'description' =>'this is watching description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'watermarked',
        'description' =>'this is watermarked description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'watersports',
        'description' =>'this is watersports description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'way',
        'description' =>'this is way description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'web',
        'description' =>'this is web description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'webcam',
        'description' =>'this is webcam description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'webcamchat',
        'description' =>'this is webcamchat description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'webcams',
        'description' =>'this is webcams description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'webcamsex',
        'description' =>'this is webcamsex description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'webcamshow',
        'description' =>'this is webcamshow description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'website',
        'description' =>'this is website description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'week',
        'description' =>'this is week description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'weird',
        'description' =>'this is weird description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'wet',
        'description' =>'this is wet description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'wetandmessy',
        'description' =>'this is wetandmessy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'wetpussy',
        'description' =>'this is wetpussy description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'what',
        'description' =>'this is what description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'whip',
        'description' =>'this is whip description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'white',
        'description' =>'this is white description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'whore',
        'description' =>'this is whore description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'whores',
        'description' =>'this is whores description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'wierd',
        'description' =>'this is wierd description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'wierdjapan',
        'description' =>'this is wierdjapan description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'wife',
        'description' =>'this is wife description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'wifes',
        'description' =>'this is wifes description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'wifey',
        'description' =>'this is wifey description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'wild',
        'description' =>'this is wild description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'with',
        'description' =>'this is with description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'wives',
        'description' =>'this is wives description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'woman',
        'description' =>'this is woman description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'women',
        'description' =>'this is women description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'work',
        'description' =>'this is work description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'workout',
        'description' =>'this is workout description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'worship',
        'description' =>'this is worship description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'wrestling',
        'description' =>'this is wrestling description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'xvideos',
        'description' =>'this is xvideos description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'xxx',
        'description' =>'this is xxx description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'young',
        'description' =>'this is young description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'youngandold',
        'description' =>'this is youngandold description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'younger',
        'description' =>'this is younger description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'youngteen',
        'description' =>'this is youngteen description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'youth',
        'description' =>'this is youth description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'zebragirls',
        'description' =>'this is zebragirls description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ],
        [
        'name'=>'zorra',
        'description' =>'this is zorra description',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
        ]

      ];

      DB::table("tags")->insert($tags);
  }
}
