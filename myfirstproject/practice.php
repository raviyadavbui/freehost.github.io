<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .practice-two h2{
            font-size: 40px;
            font-family: 'Arial Narrow Bold';
        }
        .practice-two .span-one{
            font-size: 20px;
            color:coral ;
            padding-top: 30px;
            font-family: 'Arial Narrow Bold';
        }
        .practice-two .span-two{
            font-size: 20px;
            color:coral ;
            padding-top: 30px;
            font-weight: 700;
            font-family: 'Arial Narrow Bold';
        }
        .practice-two h1{
            text-align: center;
            /* margin: 100px auto; */
            color:coral;
            /* max-width: 550px; */
            position: relative;
            margin-top: 20px;
        }
        .practice-two h1:before{
            background-color:rgba(0, 0, 0, 0.2);
            display: block;
            width: 550px;
            height: 1px;
            content: "";
            position: absolute;
            left:20px;
            
            top: 50%;
            z-index: -1;


        }
        .practice-two h1:after{
            background-color:rgba(0, 0, 0, 0.2);
            display: block;
            width: 550px;
            height: 2px;
            content: "";
            position: absolute;
            right:20px;
            
            top: 50%;
            z-index: -1;


        }
    </style>
</head>

<body>
    <?php
    include "header.php";
    ?>

    <section class="practice-section-first">
        <div class="text-center p-5  ">
            <h1>practice</h1>
            <span>Premier Legal Services with Integrity and Expertise</span>
        </div>



    </section>


    <section class=" practice ">
        <div class="container ">
            <!-- <div class="row">
                <div class="col-md-4"> -->
            <div>
                <h1>PRACTICE AREAS</h1>
                <h3 class="">Comprehensive Legal Solutions and Aid to Address Every Legal Need</h3>
                <span>
                    CGK offers a diverse range of practice areas, catering to the complex legal needs of our clients.
                    Our team of experienced professionals works diligently to deliver efficient and effective legal solutions.

                </span>
            </div>
            <!-- </div>
            </div> -->

            <div class="mt-4">
                <h1 class="mb-4">CONTRACT MANAGEMENT</h1>
                <h3 class="mb-4">Access Streamlined Contract Solutions for Seamless Operations</h3>
                <span>
                    Our contract management services encompass the entire lifecycle of contracts.
                    From drafting and vetting to negotiations and reviews,
                    our dedicated team ensures that our clients' contracts are meticulously crafted,
                    legally sound, and aligned with their objectives. With our expertise and close attention to detail,
                    we provide focused and targeted assistance, augmenting our clients' legal teams.
                </span><br><br><br>
                <span>Our Contract Management services include :</span><br><br>
                <div class="">

                    <ul>

                        <li>
                            <span class="">Drafting, vetting, and review of agreements and contracts</span>
                        </li>
                        <li>
                            <span class="">Managing the contract life cycle</span>
                        </li>
                        <li>
                            <span class="">Redlining of contracts</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-4">
                <h1 class="mb-4">INDUSTRIAL LABOUR CONSULTING</h1>
                <h3 class="mb-4">Navigate the Complexities of Labour Laws with Strategic Guidance</h3>
                <span>
                    Understanding the nuances of labour law can be challenging for organizations.
                    At CGK, we provide comprehensive consultancy services in industrial labour matters. We offer guidance and practical solutions to handle various legal challenges faced by management. From legal questions to policy decisions and day-to-day labour law issues, we work with the spirit of
                    cooperation and collaboration with our clients to protect their interests.
                </span><br><br><br>
                <span>Our Industrial Labor Consulting services include:</span><br><br>
                <div class="">

                    <ul>

                        <li>
                            <span class="">Expert guidance on legal and practical challenges</span>
                        </li>
                        <li>
                            <span class="">Consultancy on labour laws from appointment to termination</span>
                        </li>
                        <li>
                            <span class="">Drafting appointment letters, rules, and regulations</span>
                        </li>
                        <li>
                            <span>Liaison work with union leaders, if required</span>
                        </li>
                        <li class="">
                            <span>Assisting with business registration under labour laws</span>
                        </li>
                        <li>
                            <span>Policy decisions related to labour laws, employee strength ratios, and salary structures</span>
                        </li>
                        <li>
                            <span>Handling day-to-day labour law issues</span>
                        </li>
                        <li>
                            <span class="">Vetting of commercial contracts, including business-to-business contracts</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div>
                <h1 class="mt-4">LITIGATION</h1>
                <h3 class="mb-4">Resolve Complex Legal Disputes with Assertive Advocacy</h3>
                <span>
                    With extensive experience in litigation, CGK excels in handling cases at various courts and tribunals.
                    Our expertise spans commercial litigation, arbitration, writs before High Courts and the Supreme Court of India, labour court cases, consumer litigation, and more. We have successfully represented clients in complex disputes,
                    ensuring their rights and interests are safeguarded.

                </span>
            </div>

            <div>
                <h1 class="mt-4">INDIRECT TAXES</h1>
                <h3 class="mb-4">Traverse the Tax Landscape with Peace of Mind</h3>
                <span>
                    CGK provides advisory services and handles challenges related to indirect taxes. Our team has in-depth knowledge and
                    experience in customs law, services tax, and GST. We assist clients in navigating the complex tax landscape,
                    ensuring compliance and resolving disputes through writ petitions and representation before appellate authorities.

                </span>
            </div>


        </div>

        </div>
        <!-- <img src="images/Fotolia_39975530_Subscription_Monthly_XXL-400x300.jpg" alt="" class="img-fluid"> -->
    </section>

    <section class="practice-two mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="text-center">
                        <h2 class="mb-3">Are you having any problems but can’t consult to anyone?</h2>
                        <span class="span-one">Talk to us! We promise we can help you!</span>
                             
                        <span class="span-two">Call Now! (1)223-3344-334</span>
                    </div>
                    <div>
                        <h1><i class="fa fa-phone "></i></h1>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=" practice-one mb-3 mt-5">
        <div class="container">
            <div class="row ">
                <div class="text-center mb-5">
                    <h1>Legal Practice Areas</h1>

                    <a href="">View all Pratice :</a>
                    <!-- <i class="fa fa-long-arrow-right text-dark"></i> -->

                </div>

                <div class="col-md-3 ">
                    <div class="row-one">
                        <div class="image">
                            <img src="images/Fotolia_39975530_Subscription_Monthly_XXL-400x300.jpg" alt="" class="img-fluid imga">
                        </div>
                        <div class="text">
                            <h4 style=";">personal injury</h4>
                        </div>

                    </div>
                </div>

                <div class="col-md-3 ">
                    <div class="row-one">
                        <div class="image">
                            <img src="images/Fotolia_39975530_Subscription_Monthly_XXL-400x300.jpg" alt="" class="img-fluid imga">
                        </div>
                        <div class="text">
                            <H4>Car Acciden</H4>
                        </div>

                    </div>
                </div>

                <div class="col-md-3 ">
                    <div class="row-one">
                        <div class="image">
                            <img src="images/Fotolia_39975530_Subscription_Monthly_XXL-400x300.jpg" alt="" class="img-fluid imga">
                        </div>
                        <div class="text">
                            <H4>Car Acciden</H4>
                        </div>

                    </div>
                </div>

                <div class="col-md-3 ">
                    <div class="row-one">
                        <div class="image">
                            <img src="images/Fotolia_39975530_Subscription_Monthly_XXL-400x300.jpg" alt="" class="img-fluid imga">
                        </div>
                        <div class="text">
                            <h4>Car Acciden</h4>
                        </div>

                    </div>
                </div>

            </div>


        </div>
    </section>

    <section class=" practice-two mb-4">
        <div class="container">
            <div class="row ">
                <div class="col-md-3 ">
                    <div class="row-one">
                        <div class="image">
                            <img src="images/Fotolia_39975530_Subscription_Monthly_XXL-400x300.jpg" alt="" class="img-fluid imga">
                        </div>
                        <div class="text">
                            <h4>Car Acciden</h4>
                        </div>

                    </div>
                </div>

                <div class="col-md-3 ">
                    <div class="row-one">
                        <div class="image">
                            <img src="images/Fotolia_39975530_Subscription_Monthly_XXL-400x300.jpg" alt="" class="img-fluid imga">
                        </div>
                        <div class="text">
                            <h4>Car Acciden</h4>
                        </div>

                    </div>
                </div>

                <div class="col-md-3 ">
                    <div class="row-one">
                        <div class="image">
                            <img src="images/Fotolia_39975530_Subscription_Monthly_XXL-400x300.jpg" alt="" class="img-fluid imga">
                        </div>
                        <div class="text">
                            <h4>Car Acciden</h4>
                        </div>

                    </div>
                </div>

                <div class="col-md-3 ">
                    <div class="row-one">
                        <div class="image">
                            <img src="images/Fotolia_39975530_Subscription_Monthly_XXL-400x300.jpg" alt="" class="img-fluid imga">
                        </div>
                        <div class="text">
                            <h4>Car Acciden</h4>
                        </div>

                    </div>
                </div>

            </div>


        </div>
    </section>





    <?php
    include "footer.php";
    ?>
</body>

</html>