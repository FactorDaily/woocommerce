<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Quiz</title>
    <!-- jquery for maximum compatibility -->
    <link rel="stylesheet" href="style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../../../../wp-includes/js/jquery/jquery.js"></script>
    <script>
    /** Simple JavaScript Quiz
     * version 0.1.0
     * http://journalism.berkeley.edu
     * created by: Jeremy Rue @jrue
     *
     * Copyright (c) 2013 The Regents of the University of California
     * Released under the GPL Version 2 license
     * http://www.opensource.org/licenses/gpl-2.0.php
     * This program is distributed in the hope that it will be useful, but
     * WITHOUT ANY WARRANTY; without even the implied warranty of
     * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
     */

    var quiztitle = "Uncleji Meter";
    var qsubtitle = "Kya aapke joke mein sexist hai?";

    /**
    * Set the information about your questions here. The correct answer string needs to match
    * the correct choice exactly, as it does string matching. (case sensitive)
    *
    */
    var quiz = [
        {
            "question"      :   "Do you find this joke funny?",
            "image"         :   "quiz1.jpg",
            "choices"       :   [
                                    "Hell yes!",
                                    "This joke is stupid"
                                ],
            "correct"       :   "This joke is stupid",
            //"`explanation`"   :   "Albert Einstein drafted the special theory of relativity in 1905.",
        },
        {
            "question"      :   "Do you find this joke offensive?",
            "image"         :   "quiz2.jpg",
            "choices"       :   [
                                    "Yes, I wish I could feed this joke to Voldemort",
                                    "No, it's funny as hell"
                                ],
            "correct"       :   "Yes, I wish I could feed this joke to Voldemort",
            // "explanation"   :   "The two dollar bill is seldom seen in circulation. As a result, some businesses are confused when presented with the note.",
        },
        {
            "question"      :   "Does this joke make you want to punch the screen?",
            "image"         :   "quiz3.jpg",
            "choices"       :   [
                                    "Hell yeah!",
                                    "No way, I want to marry this joke"
                                ],
            "correct"       :   "Hell yeah!",
            // "explanation"   :   "South Carolina came under attack when Confederate soldiers attacked Fort Sumter. The war lasted until April 9th 1865.",
        },
        {
            "question"      :   "Would you send this joke to someone knowing it might hurt them?",
            "image"         :   "quiz4.jpg",
            "choices"       :   [
                                    "Not even to save my life",
                                    "Why should anyone be hurt by jokes??"
                                ],
            "correct"       :   "Not even to save my life",
            // "explanation"   :   "South Carolina came under attack when Confederate soldiers attacked Fort Sumter. The war lasted until April 9th 1865.",
        },
        {
            "question"      :   "Does this joke make you want to hug the person who sent it?",
            "image"         :   "quiz5.jpg",
            "choices"       :   [
                                    "Yes and send them flowers too!",
                                    "I want to punch them"
                                ],
            "correct"       :   "I want to punch them",
            // "explanation"   :   "South Carolina came under attack when Confederate soldiers attacked Fort Sumter. The war lasted until April 9th 1865.",
        },
        {
            "question"      :   "Do you think this joke stereotypes men and women?",
            "image"         :   "quiz6.jpg",
            "choices"       :   [
                                    "Yes, it is evil",
                                    "Pshaw, stereotypes are real for a reason"
                                ],
            "correct"       :   "Yes, it is evil",
            // "explanation"   :   "South Carolina came under attack when Confederate soldiers attacked Fort Sumter. The war lasted until April 9th 1865.",
        },
        {
            "question"      :   "Do you think jokes like this are harmful for society?",
            "image"         :   "quiz7.jpg",
            "choices"       :   [
                                    "No jokes are AWESOME!",
                                    "Yes, because they demean people and that's not cool"
                                ],
            "correct"       :   "Yes, because they demean people and that's not cool",
            // "explanation"   :   "South Carolina came under attack when Confederate soldiers attacked Fort Sumter. The war lasted until April 9th 1865.",
        },
        {
            "question"      :   "Do you think jokes like this should be sent to a special place where jokes go to die?",
            "image"         :   "quiz8.jpg",
            "choices"       :   [
                                    "Yes, let's book it a ticket already",
                                    "No this joke deserves a Nobel Prize for Humour"
                                ],
            "correct"       :   "Yes, let's book it a ticket already",
            // "explanation"   :   "South Carolina came under attack when Confederate soldiers attacked Fort Sumter. The war lasted until April 9th 1865.",
        },
        {
            "question"      :   "Do you think jokes like this are ‘harmless fun’?",
            "image"         :   "quiz9.jpg",
            "choices"       :   [
                                    "They are about as harmless as Death Eaters",
                                    "Of course! Only humourless people can't enjoy it."
                                ],
            "correct"       :   "They are about as harmless as Death Eaters",
            // "explanation"   :   "South Carolina came under attack when Confederate soldiers attacked Fort Sumter. The war lasted until April 9th 1865.",
        },
        {
            "question"      :   "Would you forward this joke to everyone in your contacts list?",
            "image"         :   "quiz10.jpg",
            "choices"       :   [
                                    "No way, I would rather take a hatchet to it",
                                    "Most definitely sirrah"
                                ],
            "correct"       :   "No way, I would rather take a hatchet to it",
            // "explanation"   :   "South Carolina came under attack when Confederate soldiers attacked Fort Sumter. The war lasted until April 9th 1865.",
        },

    ];


    /******* No need to edit below this line *********/
    var currentquestion = 0, score = 0, submt=true, picked;

    jQuery(document).ready(function($){

        /**
         * HTML Encoding function for alt tags and attributes to prevent messy
         * data appearing inside tag attributes.
         */
        function htmlEncode(value){
          return $(document.createElement('div')).text(value).html();
        }

        /**
         * This will add the individual choices for each question to the ul#choice-block
         *
         * @param {choices} array The choices from each question
         */
        function addChoices(choices){
            if(typeof choices !== "undefined" && $.type(choices) == "array"){
                $('#choice-block').empty();
                for(var i=0;i<choices.length; i++){
                    $(document.createElement('li')).addClass('choice choice-box').attr('data-index', i).text(choices[i]).appendTo('#choice-block');
                }
            }
        }

        /**
         * Resets all of the fields to prepare for next question
         */
        function nextQuestion(){
            submt = true;
            // $('#explanation').empty();
            $('#question').text(quiz[currentquestion]['question']);
            $('#pager').text('Question ' + Number(currentquestion + 1) + ' of ' + quiz.length);
            if(quiz[currentquestion].hasOwnProperty('image') && quiz[currentquestion]['image'] != ""){
                if($('#question-image').length == 0){
                    $(document.createElement('img')).addClass('question-image').attr('id', 'question-image').attr('src', quiz[currentquestion]['image']).attr('alt', htmlEncode(quiz[currentquestion]['question'])).insertAfter('#question');
                } else {
                    $('#question-image').attr('src', quiz[currentquestion]['image']).attr('alt', htmlEncode(quiz[currentquestion]['question']));
                }
            } else {
                $('#question-image').remove();
            }
            addChoices(quiz[currentquestion]['choices']);
            setupButtons();
        }

        /**
         * After a selection is submitted, checks if its the right answer
         *
         * @param {choice} number The li zero-based index of the choice picked
         */
        function processQuestion(choice){
            if(quiz[currentquestion]['choices'][choice] == quiz[currentquestion]['correct']){
                $('.choice').eq(choice).css({'background-color':'#FCB92D'});
                // $('#explanation').html('<strong>Correct!</strong> ' + htmlEncode(quiz[currentquestion]['explanation']));
                score++;
            } else {
                $('.choice').eq(choice).css({'background-color':'#FCB92D'});
                // $('#explanation').html('<strong>Incorrect.</strong> ' + htmlEncode(quiz[currentquestion]['explanation']));
            }
            currentquestion++;
            $('#submitbutton').html('NEXT QUESTION &raquo;').on('click', function(){
                if(currentquestion == quiz.length){
                    endQuiz();
                } else {
                    $(this).text('Submit Answer').css({'color':'#222'}).off('click');
                    nextQuestion();
                }
            })
        }

        /**
         * Sets up the event listeners for each button.
         */
        function setupButtons(){
            $('.choice').on('mouseover', function(){
                $(this).css({'background-color':'#FF6600', 'color':'#fff', 'font-size':'20px', 'font-weight':'600'});
            });
            $('.choice').on('mouseout', function(){
                $(this).css({'background-color':'#222', 'color':'#fff', 'font-size':'14.5px', 'font-weight':'400'});
            })
            $('.choice').on('click', function(){
                picked = $(this).attr('data-index');
                $('.choice').removeAttr('style').off('mouseout mouseover');
                $(this).css({'border-color':'#222','font-weight':700,'background-color':'rgb(252, 185, 45)'});
                if(submt){
                    submt=false;
                    $('#submitbutton').css({'color':'#000'}).on('click', function(){
                        $('.choice').off('click');
                        $(this).off('click');
                        processQuestion(picked);
                    });
                }
            })
        }

        /**
         * Quiz ends, display a message.
         */
        function endQuiz(){
            // $('#explanation').empty();
            $('#question').empty();
            $('#choice-block').empty();
            $('#submitbutton').remove();
            $('#question-image').hide();
            $('#pager').remove();
            // $('#question').text("You got " + score + " out of " + quiz.length + " correct.");
            if (Math.round(score/quiz.length * 100) >= 0 && Math.round(score/quiz.length * 100) <= 20) {
              $(document.createElement('h2')).prepend("<p>You enjoy the worst pati-patni jokes and actually think those stereotypes are true. You think most women are shrill, shallow, stupid, and make life miserable for men (who are naturally smarter and better in every way). You see everything from a male point of view and lack empathy. You need an urgent attitude makeover.</p>").prepend("<img src='Bulla.jpg' style='width: 100%; padding-bottom: 25px;'/>").insertAfter('#question');
            }
            else if (Math.round(score/quiz.length * 100) >= 21 && Math.round(score/quiz.length * 100) <= 40 ) {
              $(document.createElement('h2')).prepend("<p>You make fun of women and think they exist to make your life more comfortable, pleasurable, whatever. You may have been taught that women are inferior and need to be dominated, otherwise they will “dance on your head”. You need to see that women equal participants in society with the same rights, needs, and importance as you.</p>").prepend("<img src='Shaktikapoor.jpg' style='width: 100%; padding-bottom: 25px;'/>").insertAfter('#question');
            }
            else if (Math.round(score/quiz.length * 100) >= 41 && Math.round(score/quiz.length * 100) <= 60 ) {
              $(document.createElement('h2')).prepend("<p>You think women are awesome, but only when they play by your rules. You like to be feared, just a little, by your partner. You believe in your natural superiority and don’t hesitate to assert it as often as possible. You need to stop thinking you’re such a dude, really, and be more chilled out, seriously.</p>").prepend("<img src='Rohit.jpg' style='width: 100%; padding-bottom: 25px;'/>").insertAfter('#question');
            }
            else if (Math.round(score/quiz.length * 100) >= 61 && Math.round(score/quiz.length * 100) <= 80 ) {
              $(document.createElement('h2')).prepend("<p>You THINK men control women’s destiny (or used to think so), but lately you’ve been having doubts. You have been having this niggling feeling that women should be allowed to make their own choices in life, whether it’s the choice of a career or a partner. Congratulations! You’re going to make us proud someday.</p>").prepend("<img src='Amareshpuri.jpg' style='width: 100%; padding-bottom: 25px;'/>").insertAfter('#question');
            }
            else if (Math.round(score/quiz.length * 100) > 80) {
              $(document.createElement('h2')).prepend("<p>You’re WOKE, you amazing person, you! You are socially aware and refuse to be a tool to patriarchy. In fact, you often get into fights with people who think casual sexism is just fine. Sometimes you wish you had a quick and painless way of telling them where to get off. Worry not, now you have this quiz. Share it, and push them on the path to Wokedom.</p>").prepend("<img src='Aamir.jpg' style='width: 100%; padding-bottom: 25px;'/>").insertAfter('#question');
            }
            // $(document.createElement('h2')).css({'text-align':'center', 'font-size':'4em'}).text(Math.round(score/quiz.length * 100) + '%').insertAfter('#question');
        }

        /**
         * Runs the first time and creates all of the elements for the quiz
         */
        function init(){
            //add title
            if(typeof quiztitle !== "undefined" && $.type(quiztitle) === "string"){
                $(document.createElement('h1')).text(quiztitle).appendTo('#frame');
                $(document.createElement('h3')).text(qsubtitle).appendTo('#frame').insertAfter('h1');
            } else {
                $(document.createElement('h1')).text("Quiz").appendTo('#frame');
            }

            //add pager and questions
            if(typeof quiz !== "undefined" && $.type(quiz) === "array"){
                //add pager
                $(document.createElement('p')).addClass('pager').attr('id','pager').text('Question 1 of ' + quiz.length).appendTo('#frame');
                //add first question
                $(document.createElement('h2')).addClass('question').attr('id', 'question').text(quiz[0]['question']).appendTo('#frame');
                //add image if present
                if(quiz[0].hasOwnProperty('image') && quiz[0]['image'] != ""){
                    $(document.createElement('img')).addClass('question-image').attr('id', 'question-image').attr('src', quiz[0]['image']).attr('alt', htmlEncode(quiz[0]['question'])).appendTo('#frame');
                }

                //questions holder
                $(document.createElement('ul')).attr('id', 'choice-block').appendTo('#frame');

                //add choices
                addChoices(quiz[0]['choices']);

                //add submit button
                $(document.createElement('div')).addClass('choice-box').attr('id', 'submitbutton').text('Submit Answer').css({'font-weight':700,'color':'#fff','padding':'30px 0'}).appendTo('#frame');

                setupButtons();
            }
        }

        init();
    });
    </script>
</head>
<body class="background">
  <div class="container">
    <div id="frame" class="content-area" role="content"></div>
  </div>
</body>
</html>
