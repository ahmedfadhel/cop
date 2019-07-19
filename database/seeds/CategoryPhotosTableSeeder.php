<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Photo;
class CategoryPhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //
      $links = [
        [
          'id'  => 114,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview.mp44fc3a26d3e8df320.jpg'
        ],
        [
          'id'  => 117,
          "image" => 'https://www.picsbees.com/images/2019/07/19/3.jpg'
        ],
        [
          'id'  => 128,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview74e18212960d63ad.jpg'
        ],
        [
          'id'  => 130,
          "image" => 'https://www.picsbees.com/images/2019/07/19/285093.jpg'
        ],
        [
          'id'  => 134,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview.mp4fce98b3d324f6e23.jpg'
        ],
        [
          'id'  => 137,
          "image" => 'https://www.picsbees.com/images/2019/07/19/236747_03big.jpg'
        ],
        [
          'id'  => 138,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview71dbbe44ed239ddc.jpg'
        ],
        [
          'id'  => 142,
          "image" => 'https://www.picsbees.com/images/2019/07/19/301706_43c8856_900x2999.jpg'
        ],
        [
          'id'  => 143,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview820b82fbe7a247ec.jpg'
        ],
        [
          'id'  => 159,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview.mp4b177aca4c38a161a.jpg'
        ],
        [
          'id'  => 163,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview0ebd880b4425bdb1.jpg'
        ],
        [
          'id'  => 167,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview89eefe21d5fae0c6.jpg'
        ],
        [
          'id'  => 175,
          "image" => 'https://www.picsbees.com/images/2019/07/19/65b02eb3b457d64d6d5a10c5a441ad46.jpg'
        ],
        [
          'id'  => 176,
          "image" => 'https://www.picsbees.com/images/2019/07/19/1031b002aa7e85e451.jpg'
        ],
        [
          'id'  => 181,
          "image" => 'https://www.picsbees.com/images/2019/07/19/f52afc8bc9d1e8e1404d540c05908deb.12.jpg'
        ],
        [
          'id'  => 187,
          "image" => 'https://www.picsbees.com/images/2019/07/19/137cef1d5257a44c90.jpg'
        ],
        [
          'id'  => 188,
          "image" => 'https://www.picsbees.com/images/2019/07/19/815382-schoolgirls-and-teachers-vol-5.jpg'
        ],
        [
          'id'  => 190,
          "image" => 'https://www.picsbees.com/images/2019/07/19/big_trailer.jpg'
        ],
        [
          'id'  => 215,
          "image" => 'https://www.picsbees.com/images/2019/07/19/1182x777c.jpg'
        ],
        [
          'id'  => 220,
          "image" => 'https://www.picsbees.com/images/2019/07/19/k5aq8xvfb9uapesicqt5.jpg'
        ],
        [
          'id'  => 221,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview.mp43e728dc06b032102.jpg'
        ],
        [
          'id'  => 224,
          "image" => 'https://www.picsbees.com/images/2019/07/19/iba.jpg'
        ],
        [
          'id'  => 232,
          "image" => 'https://www.picsbees.com/images/2019/07/19/CUH-gHJVEAA1_d8.jpg'
        ],
        [
          'id'  => 245,
          "image" => 'https://www.picsbees.com/images/2019/07/19/curly-haired-brunette-takes-a-monster-cock-720p-mp4-7meaAaaEPbaaaa.jpg'
        ],
        [
          'id'  => 247,
          "image" => 'https://www.picsbees.com/images/2019/07/19/980x551_2.jpg'
        ],
        [
          'id'  => 248,
          "image" => 'https://www.picsbees.com/images/2019/07/19/180668_04big.jpg'
        ],
        [
          'id'  => 251,
          "image" => 'https://www.picsbees.com/images/2019/07/19/1280x720.2.jpg'
        ],
        [
          'id'  => 256,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview53dd6d86b57347db.jpg'
        ],
        [
          'id'  => 265,
          "image" => 'https://www.picsbees.com/images/2019/07/19/Cytherea_-_Blind_Experiment_00.jpg'
        ],
        [
          'id'  => 266,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview.mp4399b248ebd095ad5.jpg'
        ],
        [
          'id'  => 271,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview.mp41b78dd381477d8b0.jpg'
        ],
        [
          'id'  => 282,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview.mp41f3eafaf4a25a1c2.jpg'
        ],
        [
          'id'  => 287,
          "image" => 'https://www.picsbees.com/images/2019/07/19/3c9e3ba617e1e256d.jpg'
        ],
        [
          'id'  => 304,
          "image" => 'https://www.picsbees.com/images/2019/07/19/584F656.jpg'
        ],
        [
          'id'  => 310,
          "image" => 'https://www.picsbees.com/images/2019/07/19/1547644680_2561_ulporn_com.jpg'
        ],
        [
          'id'  => 315,
          "image" => 'https://www.picsbees.com/images/2019/07/19/1554220596_7281.sex-fetish.org.jpg'
        ],
        [
          'id'  => 325,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview5bf8f0e46a4f78f1.jpg'
        ],
        [
          'id'  => 329,
          "image" => 'https://www.picsbees.com/images/2019/07/19/1img_1459179985_500426.jpg'
        ],
        [
          'id'  => 334,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview8e1f8123d6145845.jpg'
        ],
        [
          'id'  => 340,
          "image" => 'https://www.picsbees.com/images/2019/07/19/default.jpg'
        ],
        [
          'id'  => 341,
          "image" => 'https://www.picsbees.com/images/2019/07/19/975x548.jpg'
        ],
        [
          'id'  => 343,
          "image" => 'https://www.picsbees.com/images/2019/07/19/019.jpg'
        ],
        [
          'id'  => 349,
          "image" => 'https://www.picsbees.com/images/2019/07/19/0a777f3dfac755576ff70bdc2b85c637.30.jpg'
        ],
        [
          'id'  => 362,
          "image" => 'https://www.picsbees.com/images/2019/07/19/242204_11big.jpg'
        ],
        [
          'id'  => 366,
          "image" => 'https://www.picsbees.com/images/2019/07/19/morgan-lee-sucking-fucking-fantasy-hd_09.jpg'
        ],
        [
          'id'  => 379,
          "image" => 'https://www.picsbees.com/images/2019/07/19/480597.jpg'
        ],
        [
          'id'  => 381,
          "image" => 'https://www.picsbees.com/images/2019/07/19/pure-mature-lisa-ann-in-workin-it-13.jpg'
        ],
        [
          'id'  => 389,
          "image" => 'https://www.picsbees.com/images/2019/07/19/hot-trick-or-treat-halloween-costumes-porn-compilation-16meaAaaEPbaaaa.jpg'
        ],
        [
          'id'  => 391,
          "image" => 'https://www.picsbees.com/images/2019/07/19/meaAaGwObaaaamhy0HYU5zIh5lm0N7s6.jpg'
        ],
        [
          'id'  => 392,
          "image" => 'https://www.picsbees.com/images/2019/07/19/Hardcore-Porn.jpg'
        ],
        [
          'id'  => 394,
          "image" => 'https://www.picsbees.com/images/2019/07/19/hentai-porn-where-you-can-see-hard-pounding.jpg'
        ],
        [
          'id'  => 409,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview.mp4517c0ffaa163f8cf.jpg'
        ],
        [
          'id'  => 411,
          "image" => 'https://www.picsbees.com/images/2019/07/19/2edde3ded95f36720.jpg'
        ],
        [
          'id'  => 425,
          "image" => 'https://www.picsbees.com/images/2019/07/19/aaliyah_love.jpg'
        ],
        [
          'id'  => 444,
          "image" => 'https://www.picsbees.com/images/2019/07/19/5865844_f1680c5.jpg'
        ],
        [
          'id'  => 445,
          "image" => 'https://www.picsbees.com/images/2019/07/19/dc076eb055ef5f8a60a41b6195e9f329.jpg'
        ],
        [
          'id'  => 457,
          "image" => 'https://www.picsbees.com/images/2019/07/19/1823498366_lesbens-porn.jpg'
        ],
        [
          'id'  => 470,
          "image" => 'https://www.picsbees.com/images/2019/07/19/previewfe2b1becd1d8b680.jpg'
        ],
        [
          'id'  => 474,
          "image" => 'https://www.picsbees.com/images/2019/07/19/married_with_issues_al_goes_deep.jpg'
        ],
        [
          'id'  => 476,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview.mp499b81e5710ec568e.jpg'
        ],
        [
          'id'  => 479,
          "image" => 'https://www.picsbees.com/images/2019/07/19/woman-masturbating-1140x641.jpg'
        ],
        [
          'id'  => 480,
          "image" => 'https://www.picsbees.com/images/2019/07/19/meaf8Ggaaaamhw_jYBgiNKcGYlj6a14.jpg'
        ],
        [
          'id'  => 486,
          "image" => 'https://www.picsbees.com/images/2019/07/19/g1plq0n74ul0.jpg'
        ],
        [
          'id'  => 493,
          "image" => 'https://www.picsbees.com/images/2019/07/19/mmfthreesome.jpg'
        ],
        [
          'id'  => 495,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview.mp45c49e7bfbe8d1f31.jpg'
        ],
        [
          'id'  => 496,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview49c4c6e48f209c68.jpg'
        ],
        [
          'id'  => 500,
          "image" => 'https://www.picsbees.com/images/2019/07/19/24192_02_120sec_00.jpg'
        ],
        [
          'id'  => 510,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview63250c1f5f90eb40.jpg'
        ],
        [
          'id'  => 512,
          "image" => 'https://www.picsbees.com/images/2019/07/19/1182x777c34553355c4ae2f56.jpg'
        ],
        [
          'id'  => 515,
          "image" => 'https://www.picsbees.com/images/2019/07/19/cute_porn_nerds_01.jpg'
        ],
        [
          'id'  => 522,
          "image" => 'https://www.picsbees.com/images/2019/07/19/alli-rae-in-i-hate-my-stepbrother6.jpg'
        ],
        [
          'id'  => 529,
          "image" => 'https://www.picsbees.com/images/2019/07/19/Blonde-Lexi-Belle-with-Pale-Nipples-Wearing-Uniform-Giving-Blowjob-10.jpg'
        ],
        [
          'id'  => 534,
          "image" => 'https://www.picsbees.com/images/2019/07/19/efc7667564c801b723843a81b5b10ab5.jpg'
        ],
        [
          'id'  => 535,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview.mp475bc1a3f1e1bea4c.jpg'
        ],
        [
          'id'  => 544,
          "image" => 'https://www.picsbees.com/images/2019/07/19/10997_panoramic.jpg'
        ],
        [
          'id'  => 547,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview1bdda92b19126bac.jpg'
        ],
        [
          'id'  => 554,
          "image" => 'https://www.picsbees.com/images/2019/07/19/323703_18_1.jpg'
        ],
        [
          'id'  => 556,
          "image" => 'https://www.picsbees.com/images/2019/07/19/wild-passionate-porn-with-a-brunette-in-bed-8meaAaaEPbaaaa.jpg'
        ],
        [
          'id'  => 557,
          "image" => 'https://www.picsbees.com/images/2019/07/19/brazzers-6.jpg'
        ],
        [
          'id'  => 578,
          "image" => 'https://www.picsbees.com/images/2019/07/19/975x5486d74aeb758cbbd35.jpg'
        ],
        [
          'id'  => 581,
          "image" => 'https://www.picsbees.com/images/2019/07/19/057370b581f91fe9d4.jpg'
        ],
        [
          'id'  => 585,
          "image" => 'https://www.picsbees.com/images/2019/07/19/227785_05big.jpg'
        ],
        [
          'id'  => 591,
          "image" => 'https://www.picsbees.com/images/2019/07/19/b67b44c9bf36b2e011cc9ac934bfca77.26.jpg'
        ],
        [
          'id'  => 603,
          "image" => 'https://www.picsbees.com/images/2019/07/19/ella-hughes-in-meme-lover-12.jpg'
        ],
        [
          'id'  => 618,
          "image" => 'https://www.picsbees.com/images/2019/07/19/roxanne-rae-in-a-rough-pro-bono8.jpg'
        ],
        [
          'id'  => 629,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview92a780dcf6637f98.jpg'
        ],
        [
          'id'  => 652,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview.mp40d8edc9b49a2c9da.jpg'
        ],
        [
          'id'  => 669,
          "image" => 'https://www.picsbees.com/images/2019/07/19/previewaf03e00def45d56d.jpg'
        ],
        [
          'id'  => 688,
          "image" => 'https://www.picsbees.com/images/2019/07/19/kendra-lust-in-double-dribble-on-my-tits3.jpg'
        ],
        [
          'id'  => 702,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview.mp49498ef25a67fdb71.jpg'
        ],
        [
          'id'  => 707,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview.mp487764ac794752fdf.jpg'
        ],
        [
          'id'  => 712,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview.mp4c5a69b6c67c7b584.jpg'
        ],
        [
          'id'  => 718,
          "image" => 'https://www.picsbees.com/images/2019/07/19/pic9.jpg'
        ],
        [
          'id'  => 719,
          "image" => 'https://www.picsbees.com/images/2019/07/19/82771-female-fake-taxi-image-1.jpg'
        ],
        [
          'id'  => 720,
          "image" => 'https://www.picsbees.com/images/2019/07/19/jordi-fucks-his-english-teacher-dirty-english-teacher-10meaAaaEPbaaaa.jpg'
        ],
        [
          'id'  => 722,
          "image" => 'https://www.picsbees.com/images/2019/07/19/975x54870c286c0a2df6716.jpg'
        ],
        [
          'id'  => 729,
          "image" => 'https://www.picsbees.com/images/2019/07/19/girl-bound-gagged-in-movie-zj1do.jpg'
        ],
        [
          'id'  => 730,
          "image" => 'https://www.picsbees.com/images/2019/07/19/preview.mp41a3023548d9be8d6.jpg'
        ],
        [
          'id'  => 732,
          "image" => 'https://www.picsbees.com/images/2019/07/19/pornpros-tight-deep-italian-pussy-pounded-by-big-dick-100meaAaaEPbaaaa.jpg'
        ],
        [
          'id'  => 733,
          "image" => 'https://www.picsbees.com/images/2019/07/19/ddf-busty-busty-nymphos-fuck-plumber-with-monster-dick-15meaAaaEPbaaaa.jpg'
        ],
        [
          'id'  => 754,
          "image" => 'https://www.picsbees.com/images/2019/07/19/category-uncensored_1555614710.png'
        ],
        [
          'id'  => 760,
          "image" => 'https://www.picsbees.com/images/2019/07/19/414c9626ffcaf80a72e69de63d2f7487.jpg'
        ],
        [
          'id'  => 768,
          "image" => 'https://www.picsbees.com/images/2019/07/19/previewb6e2ff9de9108762.jpg'
        ],
        [
          'id'  => 778,
          "image" => 'https://www.picsbees.com/images/2019/07/19/previewa6464bc63cc9d9fa.jpg'
        ],
        [
          'id'  => 780,
          "image" => 'https://www.picsbees.com/images/2019/07/19/124438d8619244c08d.jpg'
        ],
        [
          'id'  => 784,
          "image" => 'https://www.picsbees.com/images/2019/07/19/975x5481b0dc5fcb5858ac2.jpg'
        ],
        [
          'id'  => 785,
          "image" => 'https://www.picsbees.com/images/2019/07/19/20ec74fc821eb44080.jpg'
        ],
        [
          'id'  => 794,
          "image" => 'https://www.picsbees.com/images/2019/07/19/previewc513de8ee4d7d7cc.jpg'
        ],

      ];
      foreach ($links as $link) {
        # code...
        $cat = Category::find($link['id']);
        $cat->photos()->update([
          'url' => $link['image']
        ]);
      }
    }
}
