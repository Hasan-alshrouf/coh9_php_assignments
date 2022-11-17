<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./folder_css/cv.css">
    <title>Create your CV</title>


</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">

                <img class="navbar-brand"
                    src="./img/initial-cv-letter-logo-with-creative-modern-business-typography-vector-template-creative-abstract-letter-cv-logo-design-2B06W5R.jpg"
                    width="70rem">

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-white ms-5" aria-current="page" href="./">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white ms-5" href="#">Create Your CV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white ms-5" href="./cv.php">Your CV</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <div class="container mb-5 pb-5 ">
        <div class="text-center my-4 fo  text-secondary">
            <h1>Create your CV</h1>
            <hr class="border-style: inset;
            border-width: 1px;">

        </div>

        <!-- form search -->
        <div class="cv-search w-50 m-auto pt-5">
            <form  method="POST" action="./search.php" >
                <div class="input-group mb-3">
                    <input type="search" class="form-control" placeholder="Find your CV ..."
                        aria-label="Recipient's username" aria-describedby="button-addon2" name="search"
                            value="" >
                    <button class="cc btn btn-outline-secondary" type="submit"  id="button-addon2">Search</button>
                </div>


            </form>
        </div>

        <div class=" pt-5 mb-5 ">
            <p class="text-center fs-5 ">
                Let us create your CV for the world to see who you are!
            </p>
        </div>


        <!--main container-->
        <div class="container border border-secondary border-opacity-25 ">




            <div class="cv-create pt-5 w-75 m-auto">
               <!-- form  -->
                <form method="POST" action="./val_cv.php" class="row g-3 mt-5">

              


                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="e.g." name="First_name"
                            value="" >
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Surname</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="e.g." name="Surname"
                            value="">
                    </div>



                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Profession</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="programmer..."
                            name="Profession" value="">
                    </div>

                    <div class="col-md-6">
                        <label for="inputEmai" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmai" placeholder="e.g. mdelacruz@sample.ph"
                            name="Email" value="">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPhone" class="form-label">Phone</label>
                        <input type="number" class="form-control" id="inputPhone" placeholder="962-000" name="Phone"
                            value="">
                    </div>


                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Social Website</label>
                        <select id="inputState" class="form-select">
                            <option  name="Social Website" value="Github">Github</option>
                            <option name="Social Website" value="LinkedIn">LinkedIn</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Social Link</label>
                        <input type="email" class="form-control" id="inputCity" name="Social_Link" value="">
                    </div>
                    <p> your picture</p>
                    <div class=" img input-group mb-3 mt-0 img ">

                        <label class=" input-group-text" for="inputGroupFile"> <img
                                src="./img/blank-profile-picture-973460__480.webp" width="70rem"></label>
                        <input type="file" class=" form-control" id="inputGroupFile" name="picture" value="">
                    </div>


                    <div class="para-fields js-scroll">
                        <div class="row edu-univ-city-row ">
                            <div class="col-sm-6">
                                <div class="form-group "><label for="school" class="control-label">School
                                        Name</label>
                                    <div role="combobox" aria-haspopup="listbox" aria-owns="react-autowhatever-school"
                                        aria-expanded="false" class="autosuggest-container"><input type="text"
                                            autocomplete="off" aria-autocomplete="list"
                                            aria-controls="react-autowhatever-school" class="form-control autosuggest"
                                            placeholder="e.g. University of San Carlos" name="School" id="school"
                                            maxlength="50" autosuggesttype="googleplaces" spellcheck="true" value="">
                                        <div id="react-autowhatever-school" class="autosuggest-list-container"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group placeholder-wrap  bold-GRST  is-valid"><label
                                        class="control-label " for="fromCal">Graduation Start
                                        Date</label><i class="icon-calendar"></i><input type="number" min="1990"
                                        max="2020" placeholder="Select" class="form-control" id="fromCal" value=""
                                        name="Graduation_Start">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group placeholder-wrap  bold-GRED  is-valid"><label
                                        class="control-label " for="toCal">Graduation End
                                        Date</label><i class="icon-calendar"></i><input type="number" min="1990"
                                        max="2020" placeholder="Select" class="form-control" id="toCal" value=""
                                        name="Graduation_End"></div>
                            </div>
                        </div>


                    </div>

                    <div class="col-12 mt-5 " >
                      <label class="visually-hidden" for="autoSizingInputGroup">Job title</label>
                      <div class="input-group">
                     <div class="input-group-text ">Experience</div>
                      <input type="text" class="form-control " id="autoSizingInputGroup" placeholder="Job title" name="Job_title" >
                      <textarea class="form-control w-50 " placeholder="detalis" id="floatingTextar"
                                style="height: 100px" name="decsription" value=""></textarea>
                          
                      </div>
              

                      
            


                    </div>


                    <div class="btn-group  pt-5   d-flex justify-content-center align-items-center w-75">
                        <p class="mx-3 mt-1  align-items-center">Skils:</p>
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Centered dropdown
                        </button>
                        <div class="dropdown-menu w-50">
                            <label class="input-group-text" for="inputGroupSelect01">Skils 1 </label>
                            <input type="text" aria-label="First name" class="form-control" placeholder="...."
                                name="Skils1" value="">
                            <label class="input-group-text" for="inputGroupSelect02">Skils 2</label>
                            <input type="text" aria-label="First name" class="form-control" placeholder="...."
                                name="Skils2" value="">
                            <label class="input-group-text" for="inputGroupSelect03">Skils 3</label>
                            <input type="text" aria-label="First name" class="form-control" placeholder="...."
                                name="Skils3" value="">
                            <label class="input-group-text" for="inputGroupSelect0">Skils 4</label>
                            <input type="text" aria-label="First name" class="form-control" placeholder="...."
                                name="Skils4" value="">
                            <button type="button"
                                class="btn btn-secondary m-2 d-flex justify-content-center">Done</button>
                        </div>
                    </div>
                    <p class="mt-5 text-center">
                        Profile
                    </p>
                    <div class="mb-5 mt-1  d-flex justify-content-center ">

                        <div class="form-floating w-75">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                                style="height: 100px" name="Profile" value=""></textarea>
                            <label for="floatingTextarea">Comments</label>
                        </div>

                    </div>
                    
                    <div>
                        
                    <button type="submit" class= "cc submit btn btn-dark mt-3 mb-5 w-25 ">Create</button>
                    
                    </div>
                </form>


            </div>


        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    
</body>
</html>