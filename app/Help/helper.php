<?php




    function getSetting($settingname = 'sitename'){

        return \App\SiteSetting::where('namesetting' , $settingname)->get()[0]->value;
    }

    function bu_type(){

        $array = [
            'Flat',
            'Villa',
            'Chalet',

        ];

        return $array;
    }



    function bu_rent(){

        $array = [
            'Rent',
            'Ownership',


        ];

        return $array;
    }

    function bu_status(){

        $array = [
            'ункс',
            'лэб ункс',


        ];

        return $array;
    }


    function roomnumber(){
        $array = [];
        for($i = 2 ; $i <= 50 ; $i++){
            $array[$i] = $i ;
        }
        return $array;
    }


    function searchNameField(){

        return [

            'bu_price' => 'Building Price' ,
            'bu_place' => 'Place' ,
            'rooms' => 'NO.Rooms' ,
            'bu_rent' => 'Type Of Process' ,
            'bu_type' => 'Type of Buildind' ,
            'bu_square' => 'Square',
            'bu_price_from' => 'Building Price From' ,
            'bu_price_to' => 'Building Price To'
        ];
    }


    function bu_place(){
        return[
            


            "whole-country" => "Whole country",

            "whole-alexandria" =>  "Whole Alexandria",

            "abu-qir" => "Abu Qir",
            "agami" => "Agami" ,
            "al-adrah" => "Al Hadrah",
            "al-lbrahimiyyah" =>"Al Ibrahimiyyah",
            "Amreya" => "Amreya",
            "Asafra" => "Asafra",
            "Attarin" =>"Attarin",
            "awayed" => "Awayed" ,
            "azarita" => "Azarita" ,
            "bacchus" => "Bacchus",
            "bahray-anfoshy" => "Bahray - Anfoshy",
            "bolkly" => "Bolkly" ,
            "borg al-arab"=>"Borg al-Arab",
            "camp-caesar" => "Camp Caesar" ,
            "cleopatra" => "Cleopatra" ,
            "dekheila" => "Dekheila" ,
            "dhahria" => "Dhahria",
            "el-max" => "El Max" ,
            "fleming" => "Fleming",
            "gianaclis" => "Gianaclis" ,
            "glim" => "Glim" ,
            "gomrok" => "Gomrok",
            "kabbary" => "Kabbary",
            "kafr-abdo" =>"Kafr Abdo" ,
            "karmous" => "Karmous" ,
            "koum-al-dikka" => "Koum al-Dikka" ,
            "labban" => "Labban" ,
            "laurent" => "Laurent" ,
             "maamoura" =>"Maamoura" ,
            "mandara" => "Mandara" ,
            "manshiyya" => "Manshiyya" ,
            "miami" => "Miami" ,
            "mina-al-basal" => "Mina al-Basal" ,
            "moharam-bik" => "Moharam Bik" ,
            "montazah" => "Montazah" ,
            "nakheel" => "Nakheel" ,
            "nozha" => "Nozha" ,
            "raml-station" => "Raml Station" ,
            "ras-el-tin" => "Ras El Tin" ,
            "roushdy" => "Roushdy" ,
            "saba-pasha" => "Saba Pasha" ,
            "salehia" => "Salehia" ,
            "san-stefano" => "San Stefano" ,
            "schutz" => "Schutz" ,
            "seyouf" => "Seyouf" ,
            "shatby" => "Shatby" ,
            "sidi-beshr" => "Sidi Beshr" ,
            "sidi-gaber" => "Sidi Gaber",
            "smoha" => "Smoha" ,
            "sporting" => "Sporting",
            "stanley" => "Stanley" ,
            "tosson" =>   "Tosson" ,
            "victoria" => "Victoria" ,
            "wardian" => "Wardian",
            "zezenia" => "Zezenia",

            "whole-aswan" => "Whole Aswan",

            "abou-al-reish" =>     "Abou al-Reish" ,
            "abou-simbel" =>     "Abou Simbel" ,
            "aswan-city" =>     "Aswan City" ,
            "basiliah" =>     "Basiliah" ,
            "daraw" =>     "Daraw" ,
            "edfu" =>     "Edfu" ,
            "kalabsha" =>     "Kalabsha" ,
            "kom-ombo" =>     "Kom Ombo" ,
            "nasr-al-noba" =>     "Nasr al-Noba" ,
            "rdesiah" =>     "Rdesiah" ,
            "sahara" => "Sahara"  ,
            "sebaeiah" =>     "Sebaeiah" ,


            "whole-asyut" => "Whole Asyut" ,

            "abnub" =>     "Abnub" ,
            "abu-teeg" =>     "Abu Teeg" ,
            "asyut-city" =>     "Asyut City" ,
            "badari" =>     "Badari" ,
            "dairut" =>     "Dairut" ,
            
            "fateh" => "Fateh" ,
            "ghanayem" =>     "Ghanayem" ,
            "manfalut" =>     "Manfalut" ,
            "new-assiut" =>     "New Assiut" ,
            "qusiya" =>     "Qusiya" ,
            "sahel-selim" =>     "Sahel Selim" ,
            "sedfa" =>     "Sedfa"  ,


            "whole-beheira" =>"Whole Beheira"  ,


            "abou-homs" =>     "Abou Homs" ,
            "abuu-al-matamer" =>     "Abuu al-Matamer" ,
            "badr" =>     "Badr"  ,
            "damanhour" =>     "Damanhour"  ,
            "delengat" =>     "Delengat"  ,
            "edko" =>     "Edko" ,
            "etay-al-barud" =>     "Etay al-Barud"  ,
            "hosh-essa" =>     "Hosh Essa"  ,
            "kafr-al-dawwar" =>     "Kafr al-Dawwar" ,
            "kom-hamadah" =>     "Kom Hamadah"  ,
            "mahmoudiyah" =>     "Mahmoudiyah" ,
            "nubariyah" =>     "Nubariyah"  ,
            "rahmaniya" =>     "Rahmaniya" ,
            "rashid" =>     "Rashid"  ,
            "shubrakhit" =>     "Shubrakhit" ,
            "wadi-al-natrun" =>     "Wadi al-Natrun"  ,


            "whole-beni-suef" => "Whole Beni Suef"  ,


            "al-feshn" =>     "Al Feshn"  ,
            "al-wasty" =>     "Al Wasty"  ,
            "beba" =>     "Beba"  ,
            "beni-suef-city" =>     "Beni Suef City"  ,
            "ehnasia" =>     "Ehnasia"  ,
            "nasser" =>     "Nasser" ,
            "new-beni-suef" =>     "New Beni Suef" ,
            "samasta" =>     "Samasta"  ,


            "whole-Cairo" =>      "Whole Cairo"  ,


            "10th-ramadan-city" =>     "10th Ramadan City"  ,
            "15-may-city" =>     "15 May City"  ,
            "abasiya" =>     "Abasiya"  ,
            "ain-shams" =>     "Ain Shams"  ,
            "al-amiriyyah" =>     "Al Amiriyyah"  ,
            "al-manial" =>     "Al Manial"  ,
            "almazah" =>     "Almazah"  ,
            "ataba" =>     "Ataba"  ,
            "bab-al-shereia" =>     "Bab al-Shereia" ,
            "Badr-City" =>     "Badr City"  ,
            "bait-el-watan" =>     "Bait El Watan"  ,
            "basateen" =>     "Basateen"  ,
            "boulaq" =>     "Boulaq"  ,
            "cairooo" =>     "Cairo - Other"  ,
            "dar-al-salaam" =>     "Dar al-Salaam"  ,
            "darb-al-ahmar" =>     "Darb al-Ahmar"  ,
            "darrasa" =>     "Darrasa"  ,
            "downtown-cairo" =>     "Downtown Cairo"  ,
            "future-city" =>     "Future City"  ,
            "gamaleya" =>     "Gamaleya"  ,
            "garden-city" =>     "Garden City"  ,
            "hadayek-al-kobba" =>     "Hadayek al-Kobba" ,
            "hadayek-helwan" =>     "Hadayek Helwan"  ,
            "heliopolis" =>     "Heliopolis"  ,
            "helmeya" =>     "Helmeya"  ,
            "helmeya-al-gadeda" =>     "Helmeya al-Gadeda"  ,
            "helwan" =>     "Helwan"  ,
            "izbat-an-nakhl" =>     "Izbat an Nakhl" ,
            "katameya" =>     "Katameya" ,
            "khalifa" =>     "Khalifa"  ,
            "ma-sara" =>     "Ma'sara"  ,
            "maadi" =>     "Maadi"  ,
            "Madinaty" =>     "Madinaty"  ,
            "marg" =>     "Marg"  ,
            "masr-al-kadema" =>     "Masr al-Kadema"  ,
            "matareya" =>     "Matareya"  ,
            "mokattam" =>     "Mokattam"  ,
            "moski" =>     "Moski" ,
            "mounira-al-gadeda" =>     "Mounira al-Gadeda"  ,
            "musturad" =>     "Musturad"  ,
            "nasr-city" =>     "Nasr City"  ,
            "new-cairo-andalous" =>     "New Cairo - Andalous"  ,
            "fifth-settlement" =>     "New Cairo - Fifth Settlement" ,
            "First-Settlement" =>     "New Cairo - First Settlement"  ,
            "new-cairo-lotus" =>     "New Cairo - Lotus"  ,
            "new-cairo" =>     "New Cairo - Other"  ,
            "rehab-city" =>     "New Cairo - Rehab City" ,
            "new-capital-city" =>     "New Capital City"  ,
            "new-heliopolis" =>     "New Heliopolis"  ,
            "nozha-cairo" =>     "Nozha"  ,
            "obour-city" =>     "Obour City" ,
            "qasr-al-nil" =>     "Qasr al-Nil"  ,
            "ramses-ramses-extension" =>     "Ramses + Ramses Extension" ,
            "rod-al-farag" =>     "Rod al-Farag"  ,
            "roda" =>     "Roda" ,
            "sahel" =>     "Sahel"  ,
            "salam-city" =>     "Salam City"  ,
            "sayeda-zeinab" =>     "Sayeda Zeinab"  ,
            "sharabeya" =>     "Sharabeya"  ,
            "Sheraton" =>     "Sheraton"  ,
            "shorouk-city" =>     "Shorouk City"  ,
            "shubra" =>     "Shubra"  ,
            "tebeen" =>     "Tebeen" ,
            "the-3rd-district" =>     "The 3rd District"  ,
            "tura" =>     "Tura" ,
            "waili" =>     "Waili"  ,
            "zahraa-al-maadi" =>     "Zahraa Al Maadi"  ,
            "zamalek" =>     "Zamalek"  ,
            "zawya-al-hamra" =>     "Zawya al-Hamra"  ,
            "zaytoun" =>     "Zaytoun" ,
            "dakahlia" =>     "Dakahlia"  ,
            "Dakahlia" =>      "dakahlia"  ,
            "aga" =>     "Aga"  ,
            "akhtab" =>     "Akhtab"  ,
            "bani-ubayd" =>     "Bani Ubayd" ,
            "belqas" =>     "Belqas"  ,
            "dikirnis" =>     "Dikirnis"  ,
            "gamaleya" =>     "Gamaleya"  ,
            "gamasa" =>     "Gamasa"  ,
            "mansura" =>     "Mansura"  ,
            "manzala" =>     "Manzala"  ,
            "matareya" =>     "Matareya"  ,
            "minat-al-nasr" =>     "Minat al-Nasr" ,
            "mit-ghamr" =>     "Mit Ghamr"  ,
            "mit-slseel" =>     "Mit Slseel"  ,
            "nabaruh" =>     "Nabaruh"  ,
            "shirbin" =>     "Shirbin"  ,
            "sinbillawain" =>     "Sinbillawain"  ,
            "talkha" =>     "Talkha" ,
            "tama-al-amdeed" =>     "Tama al-Amdeed"  ,


            "whole -dameitta" =>     "Whole Damietta"  ,


            "damietta-city" =>     "Damietta City" ,
            "ezbet-al-burj" =>     "Ezbet al-Burj"  ,
            "fareskour" =>     "Fareskour"  ,
            "kafr-al-bateekh" =>     "Kafr al-Bateekh" ,
            "kafr-saad" =>     "Kafr Saad"  ,
            "mit-abughalb" =>     "Mit Abughalb"  ,
            "new-damietta" =>     "New Damietta"  ,
            "ras-al-bar" =>     "Ras al-Bar"  ,
            "rodah" =>     "Rodah"  ,
            "saro" =>     "Saro"  ,
            "zarqa" =>     "Zarqa"  ,
            "fayoum" =>     "Fayoum"  ,
            "atssa" =>     "Atssa" ,
            "fayoum-city" =>     "Fayoum City"  ,
            "ibshway" =>     "Ibshway"  ,
            "new-fayoum" =>     "New Fayoum"  ,
            "sinnuras" =>     "Sinnuras"  ,
            "tamiya" =>     "Tamiya"  ,
            "yusuf-al-sadiq" =>     "Yusuf al-Sadiq"  ,
            "gharbia" =>     "Gharbia" ,
            "Gharbia" =>      "gharbia"  ,
            "basyoun" =>     "Basyoun"  ,
            "kafr-al-zayat" =>     "Kafr al-Zayat" ,
            "mahalla-al-kobra" =>     "Mahalla al-Kobra"  ,
            "qutour" =>     "Qutour"  ,
            "samanoud" =>     "Samanoud" ,
            "santa" =>     "Santa" ,
            "zefta" =>     "Zefta"  ,
            "giza" =>     "Giza"  ,
            "6th-of-october" =>     "6th of October"  ,
            "abu-rawash" =>     "Abu Rawash"  ,
            "agouza" =>     "Agouza"  ,
            "ard-el-lewa" =>     "Ard El Lewa"  ,
            "azizia" =>     "Azizia"  ,
            "badrasheen" =>     "Badrasheen"  ,
            "bani-salamah" =>     "Bani Salamah" ,
            "baragil" =>     "Baragil"  ,
            "bashtil" =>     "Bashtil"  ,
            "boulaq-dakrour" =>     "Boulaq Dakrour"  ,
            "dahab-island-and-coldair" =>     "Dahab Island and Coldair" ,
            "dahshur" =>     "Dahshur"  ,
            "dokki" =>     "Dokki"  ,
            "el-ayyat" =>     "El Ayyat"  ,
            "faisal" =>     "Faisal"  ,
            "giza-district" =>     "Giza District" ,
            "hadayek-al-ahram" =>     "Hadayek al-Ahram"  ,
            "haram" =>     "Haram"  ,
            "haraneya" =>     "Haraneya" ,
            "hawamdeya" =>     "Hawamdeya"  ,
            "imbaba" =>     "Imbaba"  ,
            "kafr-tohormos" =>     "Kafr Tohormos"  ,
            "kerdasa" =>     "Kerdasa"  ,
            "kit-kat" =>     "Kit Kat" ,
            "mansuriyya" =>     "Mansuriyya"  ,
            "markaz-al-giza" =>     "Markaz al-Giza" ,
            "maryotaya" =>     "Maryotaya"  ,
            "mit-oqba" =>     "Mit Oqba" ,
            "mohandessin" =>     "Mohandessin"  ,
            "moneeb" =>     "Moneeb"  ,
            "nahia" =>     "Nahia"  ,
            "omrania" =>     "Omrania"  ,
            "oseem" =>     "Oseem" ,
            "pharaonic-village" =>     "Pharaonic Village"  ,
            "remaia" =>     "Remaia" ,
            "saf" =>     "Saf"  ,
            "saft" =>     "Saft"  ,
            "sahafieen" =>     "Sahafieen"  ,
            "sakyet-mekky" =>     "Sakyet Mekky"  ,
            "saqqara" =>     "Saqqara"  ,
            "sheikh-zayed" =>     "Sheikh Zayed" ,
            "souk-al-ahad" =>     "Souk al-Ahad"  ,
            "tersa" =>     "Tersa"  ,
            "wardan" =>     "Wardan" ,
            "warraq" =>     "Warraq"  ,
            "west-somid" =>     "West Somid" ,
            "ismailia" =>     "Ismailia"  ,
            "Ismailia" =>      "ismailia"  ,
            "abu-swear" =>     "Abu Swear" ,
            "fayed" =>     "Fayed"  ,
            "ismailia-city" =>     "Ismailia City"  ,
            "kantara-east" =>     "Kantara East"  ,
            "kantara-west" =>     "Kantara West" ,
            "qassaseen" =>     "Qassaseen"  ,
            "tal-al-kebeer" =>     "Tal al-Kebeer" ,
            

            "whole-kafr-el-sheikh" =>     "Whole Kafr al-Sheikh"  ,


            "kafr-el-sheikh" =>      "Kafr al-Sheikh"  ,
            "baltim" =>     "Baltim"  ,
            "bella" =>     "Bella"  ,
            "brolos" =>     "Brolos"  ,
            "desouk" =>     "Desouk"  ,
            "fouh" =>     "Fouh"  ,
            "hamoul" =>     "Hamoul"  ,
            "kafr-al-sheikh-city" =>     "Kafr al-Sheikh City"  ,
            "motobas" =>     "Motobas"  ,
            "qaleen" =>     "Qaleen"  ,
            "riyadh" =>     "Riyadh"  ,
            "sidi-salem" =>     "Sidi Salem"  ,


            "whole-luxor" =>     "Whole Luxor" ,


            "armant" =>     "Armant"  ,
            "bayadeya" =>     "Bayadeya"  ,
            "isna" =>     "Isna"  ,
            "luxor-city" =>     "Luxor City"  ,
            "qurna" =>     "Qurna"  ,
            "tod" =>     "Tod"  ,
            "zinnia" =>     "Zinnia"  ,
            "matruh" =>     "Matruh" ,
            "Matruh" =>      "matruh"  ,
            "alamein" =>     "Alamein"  ,
            "barany" =>     "Barany"  ,
            "dabaa" =>     "Dabaa"  ,
            "hammam" =>     "Hammam"  ,
            "marina-el-alamein" =>     "Marina El Alamein"  ,
            "marsa-matrouh" =>     "Marsa Matrouh" ,
            "nagela" =>     "Nagela"  ,
            "north-coast" =>     "North Coast" ,
            "salloum" =>     "Salloum"  ,
            "siwa" =>     "Siwa"  ,


            "whole-minya" =>     "Whole Minya"  ,


            "abu-qurqas" =>     "Abu Qurqas"  ,
            "adwa" =>     "Adwa"  ,
            "beni-mazar" =>     "Beni Mazar"  ,
            "deir-mawas" =>     "Deir Mawas"  ,
            "maghagha" =>     "Maghagha"  ,
            "malawi" =>     "Malawi"  ,
            "matay" =>     "Matay" ,
            "minya-city" =>     "Minya City"  ,
            "new-minya" =>     "New Minya"  ,
            "samalut" =>     "Samalut"  ,


            "whole-menoufia" =>     "Whole Monufia"  ,


            "ashmon" =>     "Ashmon" ,
            "bagour" =>     "Bagour"  ,
            "berket-al-sabaa" =>     "Berket al-Sabaa" ,
            "mit-el-ezz" =>     "Mit El Ezz"  ,
            "quesna" =>     "Quesna"  ,
            "sadat" =>     "Sadat"  ,
            "sers-al-lyan" =>     "Sers al-Lyan"  ,
            "shebin-al-koum" =>     "Shebin al-Koum"  ,
            "shohadaa" =>     "Shohadaa"  ,
            "tala" =>     "Tala"  ,


            "whole-new-valley" =>     "Whole New Valley"  ,


            "New Valley" =>      "new-valley" ,
            "balat" =>     "Balat" ,
            "dakhla" =>     "Dakhla"  ,
            "farafra" =>     "Farafra"  ,
            "kharga" =>     "Kharga"  ,
            "mut" =>     "Mut"  ,
            "paris" =>     "Paris" ,


            "whole-north-sinai" =>     "hole North Sinai" ,


            "arish" =>     "Arish"  ,
            "bir-al-abed" =>     "Bir al-Abed"  ,
            "hasana" =>     "Hasana"  ,
            "nakhl" =>     "Nakhl"  ,
            "rafah" =>     "Rafah"  ,
            "sheikh-zoweyd" =>     "Sheikh Zoweyd"  ,


            "whole -port-said" =>     "Whole Port Said" ,


            "arab-district" =>     "Arab District"  ,
            "dawahy-district" =>     "Dawahy District"  ,
            "ganoub-district" =>     "Ganoub District"  ,
            "manakh-district" =>     "Manakh District" ,
            "port-fouad" =>     "Port Fouad" ,
            "sharq-district" =>     "Sharq District"  ,
            "zohour-district" =>     "Zohour District"  ,


            "whole-qalyubia" =>     "Whole Qalyubia"  ,


            "Qalyubia" =>      "qalyubia"  ,
            "bahtim" =>     "Bahtim"  ,
            "banha" =>     "Banha"  ,
            "el-ubour" =>     "El Ubour"  ,
            "kafr-shukr" =>     "Kafr Shukr" ,
            "khanka" =>     "Khanka"  ,
            "khosous" =>     "Khosous" ,
            "qaha" =>     "Qaha"  ,
            "qalyub" =>     "Qalyub"  ,
            "qanater-al-khairia" =>     "Qanater al-Khairia" ,
            "shebin-al-qanater" =>     "Shebin al-Qanater"  ,
            "shubra-al-khaimah" =>     "Shubra al-Khaimah"  ,
            "tookh" =>     "Tookh" ,
            "zawya-el-naggar" =>     "Zawya El-Naggar"  ,


            "whole-qenaqena" =>     "Whole Qena" ,


            "abu-tisht" =>     "Abu Tisht"  ,
            "farshout" =>     "Farshout"  ,
            "keft" =>     "Keft"  ,
            "nag-hammadi" =>     "Nag Hammadi"  ,
            "nakada" =>     "Nakada" ,
            "qena-city" =>     "Qena City"  ,
            "quos" =>     "Quos"  ,
            "shna" =>     "Shna"  ,
            "wakf" =>     "Wakf"  ,


            "whole-red-sea" =>     "Whole Red Sea" ,


            "hurghada-gouna" =>     "Hurghada - Gouna"  ,
            "hurghada" =>     "Hurghada - Other"  ,
            "marsa-alam" =>     "Marsa Alam"  ,
            "qusair" =>     "Qusair"  ,
            "ras-gharib" =>     "Ras Gharib"  ,
            "safaga" =>     "Safaga"  ,
            "sahl-hasheesh" =>     "Sahl Hasheesh"  ,
            "shalateen" =>     "Shalateen"  ,


            "whole-sharqia" =>     "Whole Sharqia"  ,


            "Sharqia" =>      "sharqia"  ,
            "10th-of-ramadan" =>     "10th of Ramadan"  ,
            "abu-hammad" =>     "Abu Hammad"  ,
            "abu-kabir" =>     "Abu Kabir"  ,
            "alqnayat" =>     "Alqnayat"  ,
            "awlad-saqr" =>     "Awlad Saqr"  ,
            "bilbeis" =>     "Bilbeis"  ,
            "deyerb-negm" =>     "Deyerb Negm"  ,
            "faqous" =>     "Faqous" ,
            "hihya" =>     "Hihya"  ,
            "husseiniya" =>     "Husseiniya"  ,
            "ibrahemyah" =>     "Ibrahemyah" ,
            "kafr-saqr" =>     "Kafr Saqr"  ,
            "mashtool-al-souk" =>     "Mashtool al-Souk"  ,
            "minya-al-qamh" =>     "Minya al-Qamh"  ,
            "new-salhia" =>     "New Salhia"  ,
            "qareen" =>     "Qareen" ,


            "whole-sohag" =>     "Whole Sohag"  ,


            "Sohag" =>      "sohag"  ,
            "akhmim" =>     "Akhmim"  ,
            "alasirat" =>     "Alasirat" ,
            "baliana" =>     "Baliana"  ,
            "dar-es-salam" =>     "Dar es-Salam"  ,
            "girga" =>     "Girga"  ,
            "juhaynah" =>     "Juhaynah"  ,
            "maragha" =>     "Maragha"  ,
            "monsha-a" =>     "Monsha'a" ,
            "sakaltah" =>     "Sakaltah" ,
            "sohag-city" =>     "Sohag City"  ,
            "tahta" =>     "Tahta"  ,
            "tama" =>     "Tama" ,


            "whole-south-sinai" =>     "Whole South Sinai"  ,


            "South Sinai" =>      "south-sinai"  ,
            "abu-rudeis" =>     "Abu Rudeis" ,
            "abu-zenimah" =>     "Abu Zenimah" ,
            "dahab" =>     "Dahab"  ,
            "ras-sedr" =>     "Ras Sedr"  ,
            "ras-sidr" =>     "Ras Sidr" ,
            "sharm-al-sheikh" =>     "Sharm al-Sheikh"  ,
            "st-catherine" =>     "St. Catherine"  ,
            "taba" =>     "Taba" ,
            "tor-sinai" => "Tor Sinai" ,


            "whole-suez" =>     "Whole Suez"  ,



            "ain-sukhna" =>     "Ain Sukhna"  ,
            "arbaeen" =>     "Arbaeen"  ,
            "attaka" =>     "Attaka" ,
            "faisal" =>     "Faisal"  ,
            "ganayen" =>     "Ganayen"  ,
            "suez-district" =>     "Suez District"
        ];
    }