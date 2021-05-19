# landing-page-passive-income

//ENG
I've built a landing page for a friend of mine. He needed a simple , well designed page so that people could sign up to his services where he gives them financial advice. The landing page consists of simple some mock text about him, the company he's working with and the ideal person for his services. The mock text exists because my friend is the copywriter for this task and hasn't finished his part. At the bottom of the page there is a sign-up form, which uses simple HTML validation with a bit of Js validation, however Js doesn't work as well, because I've used an external form validation service.

The biggest challenge with this page was the data being sent via email to my friend for further communication between him and his clients, so I had to choose a service that does that for me and I just had to add Js validation. In the begginning I had a PHP file for sending an e-mail with the data, but as I mentioned that attempt was unsuccessful.

//LV
Esmu uzbūvējis 'landing-page' lapu savam draugam, kurš palīdz citiem tikt galā ar savām finansēm. Lapā šobrīd ir lorem-ipsum tipa teksts, jo to vēl viņš nav pabeidzis rakstīt, bet esmu pārliecināts, ka tas neaptur no lapas novērtēšanas un kopējā tēla uztveres. Lapas apakšpusē atrodas pieteikšanās forma, kas balstīta uz HTML un Js pārbaudi/ datu validāciju. Diemžēl Js tik labi nestrādā dēļ servisa uz kuru dodas dati un tiek apkopoti, tādēļ to nācās mazliet redigēt un izņemt funkciju "prevent default", citādāk submit poga neļāva nosūtīt datus. 

Lielākās grūtības sagādāja tieši datu nosūtīšana uz e-pastu, tādēļ beigās izvēlējos izmantot servisu, kas tos apkopo un tikai pievienoju Js validāciju. Sākotnēji tika izveidots PHP fails priekš e-pasta nosūtīšanas, kas diemžēl neizdevās.
