<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="./assets/bootstrap/bootstrap-5.0.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>श्रीरामशलाका प्रश्नावली, चौपाई, अर्थ एवं फल</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
            width: 40px;
            height: 40px;
            text-align: center;
            font-size: 18px;
        }
        /* Define styles for selected cell and 9th cell in each row */
        .selected-cell {
            background-color: green !important;
        }

        .ninth-cell {
            background-color: orange !important;
        }
    </style>
</head>
<body>
    <div class="container align-center">

        <h2>श्रीरामशलाका प्रश्नावली</h2>
        <p>मानसानुरागी महानुभावोंको श्रीरामशलाका प्रश्नावलीका विशेष परिचय देनेकी कोई आवश्यकता नहीं प्रतीत होती, उसकी महत्ता एवं उपयोगितासे प्रायः सभी मानसप्रेमी परिचित होंगे। अतः नीचे उसका स्वरूपमात्र अङ्कित करके उससे प्रश्नोत्तर निकालनेकी विधि तथा उसके उत्तर- फलोंका उल्लेख कर दिया जाता है । श्रीरामशलाका प्रश्नावलीका स्वरूप इस प्रकार है-</p>

        <table class="table">
            <!-- Loop to create 15 rows -->
            <?php
                $letters = [
                    // Add all 125 Hindi letters here
                    "सु", "प्र", "उ", "बि", "हो", "मु", "ग", "ब", "सु", "नु", "बि", "घ", "धि", "इ", "द",
                    "र", "रु", "फ", "सि", "सि", "रहिं", "बस", "हि", "मं", "ल", "न", "ल", "य", "न", "अं",
                    "सुज", "सो", "ग", "सु", "कु", "म", "स", "ग", "त", "न", "इ", "ल", "धा ", "बे", "नो",
                    "त्य", "र", "न", "कु", "जो", "म", "रि", "र", "र", "अ", "की", "हो", "सं", "रा", "य ",
                    "पु", "सु", "थ", "सी", "जे", "इ", "ग", "म", "सं", "क", "रे", "हो", "स", "स", "नि",
                    "त", "र", "त", "र", "स", "हुँ", "ह", "ब", "ब", "प", "चि", "स", "हिं", "स", "तु",
                    "म", "का", "ा", "र", "र", "म", "मि", "मी", "म्हा", "ा", "जा", "हू", "हीं", "ा", "ा",
                    "ता", "रा", "रे", "री", "हृ", "का", "फ", "खा", "जू", "ई", "र", "रा", "पू", "द", "ल",
                    "नि", "को", "जो", "गो", "न", "मु", "ज", "य", "ने", "मनि", "क", "ज", "प", "स", "ल",
                    "हि", "रा", "मि", "स", "रि", "ग", "द", "न्मु", "ख", "म", "खि", "जि", "म", "त", "जं",
                    "सिं", "ख", "नु", "न", "को", "मि", "निज", "र्क", "ग", "धु", "ध", "सु", "का", "स", "र",
                    "गु", "ब", "म", "अ", "रि", "नि", "म", "ल", "ा", "न", "ढ़", "ती", "न", "क", "भ",
                    "ना", "पु", "व", "अ", "ा", "र", "ल", "ा", "ए", "तु", "र", "न", "नु", "वै", "थ",
                    "सि", "हु", "सु", "म्हा", "रा", "र", "स", "स", "र", "त", "न", "ख", "ा", "ज", "ा",
                    "र", "ा", "ा", "ला", "धी", "ा", "री", "ा", "हू", "हीं", "खा", "जू", "ई", "रा", "रे",
                ];

                // Create a 15x15 table
                for ($i = 0; $i < 15; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < 15; $j++) {
                        $index = $i * 15 + $j;
                        echo "<td class='text-center' id='cell_".$index."' onclick=\"readLetters($index)\">" . $letters[$index] . "</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>

        <div class="m-5" id="result">
            <!-- The selected cell's content will be displayed here -->
        </div>

        <p>
            इस रामशलाका प्रश्नावलीके द्वारा जिस किसीको जब कभी अपने अभीष्ट प्रश्नका उत्तर प्राप्त करनेकी इच्छा हो तो सर्वप्रथम उस व्यक्तिको भगवान् श्रीरामचन्द्रजीका ध्यान करना चाहिये । तदनन्तर श्रद्धा-विश्वासपूर्वक मनसे अभीष्ट प्रश्नका चिन्तन करते हुए प्रश्नावलीके मनचाहे कोष्ठकमें अँगुली या कोई शलाका रख देना चाहिये और उस कोष्ठकमें जो अक्षर हो उसे अलग किसी कोरे कागज या स्लेटपर लिख लेना चाहिये। प्रश्नावलीके कोष्ठकपर भी ऐसा कोई निशान लगा देना चाहिये जिससे न तो प्रश्नावली गंदी हो और न प्रश्नोत्तर प्राप्त होनेतक वह कोष्ठक भूल जाय । अब जिस कोष्ठकका अक्षर लिख लिया गया है, उससे आगे बढ़ना चाहिये तथा उसके नवें कोष्ठकमें जो अक्षर पड़े, उसे भी लिख लेना चाहिये । इस प्रकार प्रति नवें अक्षरके नवें अक्षरको क्रमसे लिखते जा तबतक लिखते जाना चाहिये, जबतक उसी पहले कोष्ठकके अक्षरतक अंगुली अथवा शलाका न पहुँच जाय। पहले कोष्ठकका अक्षर जिस कोष्ठकके अक्षरसे नवाँ पड़ेगा, वहाँतक पहुँचते-पहुँचते एक चौपाई पूरी हो जायगी, जो प्रश्नकर्ताके अभीष्ट प्रश्नका उत्तर होगी । यहाँ इस बातका ध्यान रखना चाहिये कि किसी-किसी कोष्ठकमें केवल 'आ'की मात्रा (1) और किसी-किसी कोष्ठकमें दो-दो अक्षर हैं। अतः गिनते समय न तो मात्रावाले कोष्ठकको छोड़ देना चाहिये और न दो अक्षरोंवाले कोष्ठकको दो बार गिनना चाहिये । जहाँ मात्राका कोष्ठक आवे वहाँ पूर्वलिखित अक्षरके आगे मात्रा लिख लेना चाहिये और जहाँ दो अक्षरोंवाला कोष्ठक आवे वहाँ दोनों अक्षर एक साथ लिख लेना चाहिये ।
        </p>
        <p>
            अब उदाहरणके तौरपर इस रामशलाका प्रश्नावलीसे किसी प्रश्नके उत्तरमें एक चौपाई निकाल दी जाती है। पाठक ध्यानसे देखें। किसीने भगवान् श्रीरामचन्द्रजीका ध्यान और अपने प्रश्नका चिन्तन करते हुए यदि प्रश्नावलीके * इस चिह्नसे संयुक्त 'म'वाले कोष्ठकमें अंगुली या शलाका रखा और वह ऊपर बताये क्रमके अनुसार अक्षरोंको गिन-गिनकर लिखता गया तो उत्तरस्वरूप यह चौपाई बन जायगी-
        </p>
        <p>
            हो इ है सो ई जो राम रचि राखा |</br>
            को करि त क ब ढ़ा व हिंसा खा ॥</br>
            यह चौपाई बालकाण्डान्तर्गत शिव और पार्वतीके संवादमें है । प्रश्नकर्ताको इस उत्तरस्वरूप चौपाईसे यह आशय निकालना चाहिये कि कार्य होनेमें संदेह है, अतः उसे भगवान्पर छोड़ देना श्रेयस्कर है । इस चौपाईके अतिरिक्त श्रीरामशलाका प्रश्नावलीसे और भी जितनी चौपाइयाँ बनती हैं, उन सबका स्थान और फलसहित उल्लेख नीचे किया जाता है-
        </p>

        <div class="answers"></div>

    </div>






    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="./assets/bootstrap/bootstrap-5.0.2/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./assets/jquery/jquery-3.7.1/jquery-3.7.1.js" integrity="" crossorigin="anonymous"></script>

    <script>
        // $(document).ready(function() {
            // Your JSON data
            var answers = [
                {
                    sno: 1,
                    choupai: "सुनु सिय सत्य असीस हमारी |</br> पूजहि मन कामना तुम्हारी ॥",
                    meaning: "जब माता गौरी सीता माता के प्रेम के वश हो गई, तो उनकी मूर्ति मुस्कराई, और उनके पहनी माला गिर पड़ी, सीता ने प्रसाद रूप से उस माला को धारण किया, तब गौरी माता बोली 'हे सीता ! मेरे सच्ची आशीष है, की तुम्हारी मनोकामना सिद्ध होगी'.<br>",
                    answer: "अपने इष्ट का पूजन करें, सफलता मिलेगी.</br></br></br>"
                },
                {
                    sno: 2,
                    choupai: "प्रबिसि नगर कीजे सब काजा |</br> हृदय राखि कोसलपुर राजा ॥",
                    meaning: "जब हनुमानजी लंका प्रवेश के लिए जाते है, तो लंकिनी राक्षसिनी उनको रोकती है, तब हनुमान के मुक्के खा कर वो डर के कहती है 'आप अयोध्या के राजा श्री राम का स्मरण करके लंका में अपने कार्य को करने के लिए प्रवेश कीजिये' .<br>",
                    answer: "अपने प्रभु का स्मरण करते हुए कार्य की शुरुआत करें, सफलता मिलेगी.</br></br></br>"
                },
                {
                    sno: 3,
                    choupai: "उघरहिं अंत न होइ निबाहू |</br> कालनेमि जिमि रावन राहू ॥",
                    meaning: "तुलसीदासजी कहते है की जैसे कपटी को साधु के वेश को देख कर संसार उसकी पूजा तो करता है, पर कपट अंत तक नहीं चलता, वो प्रकट हो ही जाता है, जैसे कालनेमि, रावण और राहु का हुआ था.<br>",
                    answer: "अगर कार्य न्याय पूर्ण नहीं है, तो उसकी सफलता संदिग्ध है.</br></br></br>"
                },
                {
                    sno: 4,
                    choupai: "बिधि बस सुजन कुसंगत परहीं |</br> फनि मनि सम निज गुन अनुसरहीं ॥",
                    meaning: "तुलसीदासजी कहते है की दुष्ट भी सत्संगी का साथ पाकर सुधर जाते है, परन्तु, दैवयोग से सज्जन यदि कुसंगति में फंस जाते है, तो भी सर्प  की मणि की भांति अपने सद्गुणों का अनुसरण करते है.<br>",
                    answer: "अगर बुरे लोगों का साथ है, तो उनका साथ छोड़ दे, वरना कार्य की सफलता में संदेह है.</br></br></br>"
                },
                {
                    sno: 5,
                    choupai: "होइहि सोइ जो राम रचि राखा |</br> को करितर्क बढ़ावै साखा ॥",
                    meaning: "जब शिव, श्री राम की जय बोलकर पुलकित होने लगे, तो माता सती को संदेह हुआ की राम जो एक मनुष्य है, उसकी शिव क्यों वंदना कर रहे है, अगर वो विष्णु अवतार है तो क्यों एक मनुष्य की भांति सीता को ढूंढ रहे है, तब शिवजी उनको बहुत समझाते है, पर स्त्री स्वाभाव के कारण वो समझती नहीं है, तब शिव विचार करते है 'होगा वही जो राम ने रच रखा है, तर्क करके क्यों विस्तार देना'.<br>",
                    answer: "संयम रखें, जो प्रभु की इच्छा होगी, वो ही होगा, अत: सफलता में संदेह है.</br></br></br>"
                },
                {
                    sno: 6,
                    choupai: "मुद मंगलमय संत समाजू |</br> जो जग जंगम तीरथ राजू ॥",
                    meaning: "राम चरित्र का वर्णन करते हुए तुलसीदासजी कहते है 'संतो का समाज मन को प्रसन्नता और मंगल देने वाला है, जो जगत में प्रयागराज तीर्थ के समान है'.<br>",
                    answer: "संतो का आशीर्वाद लें, कार्य सफल होगा.</br></br></br>"
                },
                {
                    sno: 7,
                    choupai: "गरल सुधा रिपु करहिं मिताई |</br> गोपद सिंधु अनल सितलाई ॥",
                    meaning: "जब हनुमानजी लंका प्रवेश के लिए जाते है, तो लंकिनी राक्षसिनी उनको रोकती है, तब हनुमान के मुक्के खा कर वो डर के राम नाम के स्मरण का कह कर हनुमान जी को लंका प्रवेश का आग्रह करती है और कहती है 'राम के स्मरण से विष अमृत हो जाता है, रिपु मित्रवत हो जाता है, समुद्र गाय के खुर के समान हो जाता है और अग्नि शीतल हो जाती है '.<br>",
                    answer: "प्रभु का स्मरण करके कार्य करें, कार्य अवश्य सिद्ध होता है.</br></br></br>"
                },
                {
                    sno: 8,
                    choupai: "बरुन कुबेर सुरेस समीरा |</br> रन सन्मुखधरि काहु न धीरा ॥",
                    meaning: "रावण के वध पर मंदोदरी विलाप करते हुए कहती है 'वरुण, कुबेर, इंद्र और वायु, इनमें से किसी ने भी रण में तुम्हारे सामने धैर्य धारण नहीं किया, पर आज तुम अनाथ की भांति पड़े हो'.<br>",
                    answer: "कार्य असफल होने के पुरे लक्षण है.</br></br></br>"
                },
                {
                    sno: 9,
                    choupai: "सुफल मनोरथ हो हुँ तुम्हारे |</br> रामु लखनु सुनि भए सुखारे ॥",
                    meaning: "गुरु विश्वामित्र अपनी सेवा से प्रसन्न होकर कहते है 'हे राम ! तुम्हारे सारे मनोरथ सफल होंगे', राम और लक्ष्मण ये सुनकर सुख से भर जाते है.<br>",
                    answer: "अपने गुरु का आर्शीवाद ले, मनोरथ पूर्ण होगा.</br></br></br>"
                }
            ];
            
            let letters = [
                // Add all 125 Hindi letters here
                "सु", "प्र", "उ", "बि", "हो", "मु", "ग", "ब", "सु", "नु", "बि", "घ", "धि", "इ", "द",
                "र", "रु", "फ", "सि", "सि", "रहिं", "बस", "हि", "मं", "ल", "न", "ल", "य", "न", "अं",
                "सुज", "सो", "ग", "सु", "कु", "म", "स", "ग", "त", "न", "इ", "ल", "धा ", "बे", "नो",
                "त्य", "र", "न", "कु", "जो", "म", "रि", "र", "र", "अ", "की", "हो", "सं", "रा", "य ",
                "पु", "सु", "थ", "सी", "जे", "इ", "ग", "म", "सं", "क", "रे", "हो", "स", "स", "नि",
                "त", "र", "त", "र", "स", "हुँ", "ह", "ब", "ब", "प", "चि", "स", "हिं", "स", "तु",
                "म", "का", "ा", "र", "र", "म", "मि", "मी", "म्हा", "ा", "जा", "हू", "हीं", "ा", "ा",
                "ता", "रा", "रे", "री", "हृ", "का", "फ", "खा", "जू", "ई", "र", "रा", "पू", "द", "ल",
                "नि", "को", "जो", "गो", "न", "मु", "ज", "य", "ने", "मनि", "क", "ज", "प", "स", "ल",
                "हि", "रा", "मि", "स", "रि", "ग", "द", "न्मु", "ख", "म", "खि", "जि", "म", "त", "जं",
                "सिं", "ख", "नु", "न", "को", "मि", "निज", "र्क", "ग", "धु", "ध", "सु", "का", "स", "र",
                "गु", "ब", "म", "अ", "रि", "नि", "म", "ल", "ा", "न", "ढ़", "ती", "न", "क", "भ",
                "ना", "पु", "व", "अ", "ा", "र", "ल", "ा", "ए", "तु", "र", "न", "नु", "वै", "थ",
                "सि", "हु", "सु", "म्हा", "रा", "र", "स", "स", "र", "त", "न", "ख", "ा", "ज", "ा",
                "र", "ा", "ा", "ला", "धी", "ा", "री", "ा", "हू", "हीं", "खा", "जू", "ई", "रा", "रे",
            ];
            
            // Function to display the selected cell's content
            function removePrevSelection() {
                const cells = document.querySelectorAll("td");
                cells.forEach((cell, index) => {
                    cell.classList.remove("ninth-cell", "selected-cell");
                });
            }

            function findMaxCharMatchChoupai(str, jsonArr) {
                let maxMatchCount = 0;
                let maxMatchChoupai = '';
                let matchedChoupai = {};

                for (const item of jsonArr) {
                    const choupai = item.choupai.replace(/<\/?br\s*\/?>/g, ' '); // Remove line breaks
                    const words = choupai.split(' ');

                    let matchCount = 0;

                    for (const word of words) {
                        for (const char of str) {
                            if (word.includes(char)) {
                                matchCount += 1;
                            }
                        }
                    }

                    if (matchCount > maxMatchCount) {
                        maxMatchCount = matchCount;
                        maxMatchChoupai = choupai;

                        matchedChoupai = item;
                        matchedChoupai.maxMatchCount = matchCount;
                    }
                }

                return matchedChoupai;
            }


            function readLetters(startIndex) {
                removePrevSelection();

                const resultElement = document.getElementById("result");
                let lettersToRead = `${letters[startIndex]}`;
                let skipLetters = 8;

                let currentIndex = startIndex;
                let nextIndex = (currentIndex + skipLetters + 1) % letters.length;
                console.log(`readLetters() :: nextIndex: `, nextIndex);

                while (nextIndex !== startIndex) {
                    const eachNinthCell = document.getElementById("cell_" + nextIndex);
                    eachNinthCell.classList.remove("selected-cell");
                    eachNinthCell.classList.add("ninth-cell");

                    lettersToRead += letters[nextIndex] + ", ";
                    currentIndex = nextIndex;
                    nextIndex = (currentIndex + skipLetters + 1) % letters.length;
                    console.log(`readLetters() :: loop-nextIndex: `, nextIndex);
                }

                
                let matchedChoupai = findMaxCharMatchChoupai(lettersToRead, answers);
                const { maxMatchCount, choupai, sno } = matchedChoupai;
                console.log(`readLetters() :: matchedChoupai: `, matchedChoupai);

                const selectedCell = document.getElementById("cell_" + startIndex);
                selectedCell.classList.remove("ninth-cell");
                selectedCell.classList.add("selected-cell");
                resultElement.innerHTML = `<b>RESULT :</b>  <p>${lettersToRead}</p></br><b>चौपाई :</b></br>  ${choupai} ${sno} ॥`;
            }

            // Get the parent element where you want to add the content
            var parentElement = document.querySelector('.answers');

            // Loop through the JSON data and create HTML elements dynamically
            answers.forEach(function(item) {
                var choupaiElement = document.createElement('p');
                choupaiElement.innerHTML = `<b>चौपाई :</b></br>  ${item.choupai} ${item.sno} ॥</br>`;
                
                var meaningElement = document.createElement('p');
                meaningElement.innerHTML = `<b>संदर्भ और अर्थ :</b>  ${item.meaning}`;
                
                var answerElement = document.createElement('p');
                answerElement.innerHTML = `<b>फल :</b>  ${item.answer}`;
                
                // Append the elements to the parent element
                parentElement.appendChild(choupaiElement);
                parentElement.appendChild(meaningElement);
                parentElement.appendChild(answerElement);
            });


        // });
    </script>
</body>
</html>
