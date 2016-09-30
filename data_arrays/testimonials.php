<?php
    $testimonials = array(
        array(
            "text" => "\"So excited I got into Manchester! Andrei and Petru were really helpful and supportive throughout and made the whole admission 
                        experience so much less stressful.\"",
            "author" => "Claudiu T.",
            "university" => "University of Manchester",
            "uni_link" => "http://www.manchester.ac.uk/"
        ),
        array(
            "text" => "\"Experienta mea cu Oxford Nation mi-a intrecut cu mult asteptarile. Obisnuita cu raceala uzuala a consultantilor educationali 
                        pe care ii mai intalnisem pana atunci, am fost placut surprinsa de atitudinea calda si pozitiva a echipei alaturi de care am reusit sa inteleg 
                        si sa obtin toate elementele care sa asigure admiterea la o facultate in Marea Britanie cum ar fi: redactarea unei scrisori de intentie, 
                        inscrierea la actiuni de voluntariat sau stagii de practica si alegerea cursurilor celor mai potrivite. Cu ajutorul lor,am reusit sa primesc 
                        un loc la o universitate de prestigiu din UK astfel ca ii recomand cu caldura tuturor celor care au nevoie de ajutor in alegerea unui domeniu 
                        de studiu potrivit cat si la admiterea pt studii in strainatate.\"",
            "author" => "Oana P.",
            "university" => "University College London",
            "uni_link" => "http://www.ucl.ac.uk/"
        ),
        array(
            "text" => "\"Voiam sa studiez in Marea Britanie insa nu stiam daca am sanse sa intru la o universitate buna. Consilierii Oxford Nation mi-au dat curaj si 
                        m-au convins sa aplic. La sfarsitul procesului, am primit oferte de la toate cele cinci optiuni si am ales universitatea Exeter, la care a studiat 
                        si Andrei. Abia astept sa incep cursul toamna asta si le multumesc foarte mult celor Oxford Nation, fara de care nu as fi reusit!\"",
            "author" => "Alex G.",
            "university" => "University of Exeter",
            "uni_link" => "http://www.exeter.ac.uk/"
        ),
        array(
            "text" => "\"I became interested in studying in the UK after attending a presentation held by Oxford Nation in my high school. After participating in a few 
                        counselling sessions, I chose the universities and courses I applied to and offers soon started to arrive. Oxford Nation also helped me to gain a scholarship 
                        to finance part of my living expenses.\"",
            "author" => "Mihai C.",
            "university" => "University of Bristol",
            "uni_link" => "http://www.bristol.ac.uk/"
        ),
    );

$number_of_testimonials = count($testimonials);
$testimonials_first_col = array();
$testimonials_second_col = array();

foreach($testimonials as $k => $v) {
    if($k+1 <= $number_of_testimonials/2) {
        array_push($testimonials_first_col, $v);
    } else {
        array_push($testimonials_second_col, $v);
    }
};
?>