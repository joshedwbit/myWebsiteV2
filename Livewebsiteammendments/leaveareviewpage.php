<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Leave a review</title>
    <link rel="icon" type="image/x-icon" href="images/myicon.ico">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="mystyles.css">
</head>
<body>
	<div class="container">
		<div class="nav-wrapper">
			<div class="left-side">
				<div class="nav-link-wrapper">
					<a href="draft1.html">Home</a>
				</div>
				<div class="nav-link-wrapper">
					<a href="contactpage.html">Contact</a>
				</div>
				<div class="nav-link-wrapper">
					<a href="reviews.php">Reviews</a>
				</div>
                <div class="nav-link-wrapper active-nav-link">
					<a href="leaveareviewpage.php">Leave a review</a>
				</div>
                <div class="nav-link-wrapper">
					<a href="twitterline.html">Recent news</a>
				</div>
			</div>
			<div class="right-side">
				<div class="brand">
				<div>Joshua Edwards Tutoring</div>
				</div>
			</div>
		</div>

        <div class="content-wrapper">
            <div class="review-items-wrapper">
                <div class="write-review-heading">
                    <h1 style="text-align:left;">Write a review</h1>
                </div>
                <p style="padding-bottom:20px; padding-top:10px;">
                    Reviews are a great way for me to reach new clients, please detail any highlights (or lowlights!) all feedback is massively appreciated.
                    <br><br>
                    Thanks,
                    Joshua
                </p>
                
                <form action="result.php" method="POST" name="myform" onsubmit="return validate()">

                <h4 class="rating-heading">First name (optional, leave blank)</h4>
                <div class="custom-text-field-box">
                    <input type="text" name="firstname" id="firstname" class="customtextfield"> 
                </div>
                <h4 class="rating-heading">School (optional, leave blank)</h4>
                <div class="custom-text-field-box">
                    <input type="text" name="school" id="school" class="customtextfield"> 
                </div>

                <h4 class="rating-heading">Year group</h4>
                <div class="select-box">
                    <div class="options-container">
                        <div class="option">
                            <!-- <input required oninvalid="this.setCustomValidity('Please enter valid answer')" oninput="setCustomValidity('')" type="radio" class="radio" id="ks3" name="category" value="KS3"> -->
                            <!-- <input required oninvalid="alert('you must fill out this field JE')" type="radio" class="radio" id="ks3" name="category" value="KS3"> -->
                            <input type="radio" class="radio" id="ks3" name="category" value="KS3">
                            <label for="ks3">KS3</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="year10" name="category" value="Year 10">
                            <label for="year10">Year 10</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="year11" name="category" value="Year 11">
                            <label for="year11">Year 11</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="asyear" name="category" value="AS">
                            <label for="asyear">AS</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="a2year" name="category" value="A2">
                            <label for="a2year">A2</label>
                        </div>
                    </div>
                    <div class="selected">
                        Please select year group
                    </div>   
                </div>

                
                <h4 class="rating-heading">Predicted grade</h4>
                <div class="select-box">
                    <div class="options-container">
                        <div class="option">
                            <input type="radio" class="radio" id="predE" name="predicted" value="E">
                            <label for="predE">E</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="predD" name="predicted" value="D">
                            <label for="predD">D</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="predC" name="predicted" value="C">
                            <label for="predC">C</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="predB" name="predicted" value="B">
                            <label for="predB">B</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="predA" name="predicted" value="A">
                            <label for="predA">A</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="predA*" name="predicted" value="A*">
                            <label for="predA*">A*</label>
                        </div>
                    </div>
                    <div class="selected">
                        Please select the grade that was predicted
                    </div>   
                </div>

                <h4 class="rating-heading">Grade achieved</h4>
                <div class="select-box">
                    <div class="options-container">
                        <div class="option">
                            <input type="radio" class="radio" id="achE" name="achieved" value="E">
                            <label for="achE">E</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="achD" name="achieved" value="D">
                            <label for="achD">D</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="achC" name="achieved" value="C">
                            <label for="achC">C</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="achB" name="achieved" value="B">
                            <label for="achB">B</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="achA" name="achieved" value="A">
                            <label for="achA">A</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="achA*" name="achieved" value="A*">
                            <label for="achA*">A*</label>
                        </div>
                    </div>
                    <div class="selected">
                        Please select the achieved grade
                    </div>   
                </div>

                <!-- <h4 class="rating-heading">Rating</h4>
                <div class="star-rating">
                    <p>How was your experience?</p>
                    <div class="star-box">
                        <button type="button" name="myrating" value="5" class="star">&#9734;</button>
                        <button type="button" name="myrating" value="4" class="star">&#9734;</button>
                        <button type="button" name="myrating" value="3" class="star">&#9734;</button>
                        <button type="button" name="myrating" value="2" class="star">&#9734;</button>
                        <button type="button" name="myrating" value="1" class="star">&#9734;</button>
                    </div>
                    <p class="current-rating">0 of 5</p>
                </div> -->

                <h4 class="rating-heading">Rating</h4>
                <div class="star-rating">
                    <p>How was your experience?</p>
                    <div class="star-box">
                        <input type="radio" name="myrating" id="rate-5" value="5" class="star">
                        <label for="rate-5">&#9734;</label>
                        <input type="radio" name="myrating" id="rate-4" value="4" class="star">
                        <label for="rate-4">&#9734;</label>
                        <input type="radio" name="myrating" id="rate-3" value="3" class="star">
                        <label for="rate-3">&#9734;</label>
                        <input type="radio" name="myrating" id="rate-2" value="2" class="star">
                        <label for="rate-2">&#9734;</label>
                        <input type="radio" name="myrating" id="rate-1" value="1" class="star">
                        <label for="rate-1">&#9734;</label>
                    </div>
                    <p class="current-rating">0 of 5</p>
                </div>

                <h4 class="rating-heading">Comments</h4>
                <div class="textarea">
                    <textarea id="myfeedback" name="feedbackforme" placeholder="Please provide details of timeframe, sucesses, challenges overcome, etc"></textarea>
                </div>
                <div class="submitbtn">
                    <!-- <button class="submit">Post</button> -->
                    <input type="submit" value="Post" class="submit">
                </div>
                <p id="errorBox" class="errorBox" style="display:none;"><p>
                </form>
            

                </div>
            </div>
        

        </div>
        <div class="footer">
            <footer>
                <h6>Website created by Joshua Edwards</h6>
                <p class="copyrightClaim" >Copyright 2022</p>
            </footer>
        </div>
	</div>
</body>

<script>
    const allStars=document.querySelectorAll('.star-box label');
    let current_rating=document.querySelector('.current-rating');
    // console.log(allStars);
    allStars.forEach((star,i)=>{
        star.onclick=function(){
            // console.log(star);
            // console.log(i+1);
            let indexed_star_level=i+1;
            let current_star_level=5-i;
            current_rating.innerText=`${current_star_level} of 5`
            // console.log(current_star_level)
            allStars.forEach((star,j)=>{
                // console.log(j+1);
                if(indexed_star_level<=j+1)
                {
                    star.innerHTML='&#9733';
                }else{
                    star.innerHTML='&#9734'
                }
            })
        }
    }
    )
</script>

<script>
    const selectedAll=document.querySelectorAll(".selected");

    selectedAll.forEach(selected=>{
        const optionsContainer=selected.previousElementSibling;
    // dont need all since only 1 selected tag etc
    const optionsList=optionsContainer.querySelectorAll(".option")
    // multiple options tags
    selected.addEventListener("click",()=>{
        if(optionsContainer.classList.contains("active")){
            optionsContainer.classList.remove("active");
        }else{
            let currentActive=document.querySelector(".options-container.active");

            if (currentActive){
                currentActive.classList.remove("active");
            }
            optionsContainer.classList.add("active");
        }
        // optionsContainer.classList.toggle("active");
        // 'toggle' either adds or takes away the active class
    });

    optionsList.forEach(o=>{
        // o references any single element
        o.addEventListener("click",()=>{
            selected.innerHTML=o.querySelector("label").innerHTML;
            optionsContainer.classList.remove("active");
            // once clicked, will give selected the value of the label
        });
    })
    })
</script>

<script>
    function validate(){
        const totalerror=["Error;\n"];
        let errorBoxall=document.querySelector('.errorBox');
        // *************************new text fields
        
        var firstnamevalid=true;
        var x=document.getElementById('firstname')
        // if (x.value.match(/[^A-Za-z]/||/.*\s.*/)){
        if (x.value.match(/[^a-z]/i)){
            firstnamevalid=false;
        }

        if(firstnamevalid){
        }
        else{
            totalerror.push('First name should only contain alphabetic characters\n')
        }

        // ******************second text field
        // var schoolvalid=true;
        // var x=document.getElementById('school')
        // if (x.value.match(/[^a-z]/i)){
        //     schoolvalid=false;
        // }

        // if(schoolvalid){
        // }
        // else{
        //     totalerror.push('School should only contain alphabetic characters\n')
        // }

        var schoolvalid=true;
        var x=document.getElementById('school')
        // if (x.value.replace(/\s/g, "").match(/[^a-z]/i) || x.value.length==0){
        // if (x.value.replace(/\s/g, "").match(/[^a-z]/i)){
        if (x.value.replace(/\s/g, "").match(/[^a-z]/i) || (x.value.length>0 && x.value.trim().length==0)){
            // checks for any characters not alphabetic or whitespace, and checks string isn't whitespace only, still allows blank field
            schoolvalid=false;
        }

        if(schoolvalid){
        }
        else{
            totalerror.push('School should only contain alphabetic characters\n')
        }
        // *********************
        var yeargroupvalid=false;
        var x=document.myform.category;
        for (var i=0;i<x.length;i++){
            if(x[i].checked==true){
                yeargroupvalid=true;
                break;
            }
        }
        if(yeargroupvalid){
            // alert("validation successful");
        }
        else{
            totalerror.push('Year group not selected\n')
                // console.log(totalerror);
            // errorBoxall.innerText=`year group field unchecked`;
             // return false;

            // alert("validation not right");
            // document.querySelector(".errorBox").innerHTML='text';
        }

        // ************************
        var predictedvalid=false;
        var x=document.myform.predicted;
        for (var i=0;i<x.length;i++){
            if(x[i].checked==true){
                predictedvalid=true;
                break;
            }
        }
        if(predictedvalid){
            // alert("validation successful");
        }
        else{
            totalerror.push('Predicted grade not selected\n')
            // errorBoxall.innerText=`predicted field unchecked`;
            // return false;

            // console.log(totalerror);
            // alert("validation not right");
            // document.querySelector(".errorBox").innerHTML='text';
   
        }

        // *************************
        var achievedvalid=false;
        var x=document.myform.achieved;
        for (var i=0;i<x.length;i++){
            if(x[i].checked==true){
                achievedvalid=true;
                break;
            }
        }
        if(achievedvalid){
            // alert("validation successful");
        }
        else{
            totalerror.push('Grade achieved not selected\n')
            // errorBoxall.innerText=`acheived field unchecked`;
            // return false;

            // console.log(totalerror);
            // alert("validation not right");
            // document.querySelector(".errorBox").innerHTML='text';
        }

        // ******************************
        var ratingvalid=false;
        var x=document.myform.myrating;
        for (var i=0;i<x.length;i++){
            if(x[i].checked==true){
                ratingvalid=true;
                break;
            }
        }
        if(ratingvalid){
            // alert("validation successful");
        }
        else{
            totalerror.push('Score out of 5 not selected\n')
            // errorBoxall.innerText=`acheived field unchecked`;
            // return false;

            // console.log(totalerror);
            // alert("validation not right");
            // document.querySelector(".errorBox").innerHTML='text';
        }

        // *******************

        var feedbackvalid=false;
        var x=document.getElementById('myfeedback')
        if (x.value.length>10){
            feedbackvalid=true;
        }

        // if(x.length>10){
        //     feedbackvalid=true;
        // }
        if(feedbackvalid){
            // alert("validation successful");
        }
        else{
            totalerror.push('Feedback less than 10 characters\n')
            // errorBoxall.innerText=`acheived field unchecked`;
            // return false;

            // console.log(totalerror);
            // alert("validation not right");
            // document.querySelector(".errorBox").innerHTML='text';
        }


        // *****************

        if(totalerror.length==1){
            // alert("validation successful");
        }
        else{
            errorBox.style.display='block';
            // window.location.hash='errorBox';
            document.getElementById('errorBox').scrollIntoView();
            let finalprint=totalerror.join('- ');
            errorBoxall.innerText=`${finalprint}`;
            return false;
        }

    }
</script>
<!-- 
<script>

document.getElementsByName("category").addEventListener("invalid", custError);
    function custError(){
      let text='hi';
      if (document.getElementsByName("category").validity.valueMissing){
          text="please select a year group";
      }
      else{
          text="input Ok";
      }
      document.getElementById("errorBox").innerHTML='text';
    }
</script> -->

<!-- <script>
    const input=document.querySelector('input[name="myrating"]')
    
    input.addEventListener('invalid',function(event){
        if (event.target.validity.valueMissing){
            event.target.setCustomValidity('please fill in year group');
        }
    })
    input.addEventListener('change',function(event){
        event.target.setCustomValidity('');
    })
</script> -->
<!-- ***form validation attempt*** <script>

const yeargroup=document.getElementById('ks3')
const predgrade=document.getElementById('predE')
const achgrade=document.getElementById('achE')
const starlevel=document.getElementById('rate-5')
const feedbackbox=document.getElementById('myfeedback')
const errorelement=document.getElementById('error')

const form=document.getElementById('form')

form.addEventListener('submit',(e)=>{
    let messages=[]
    if (yeargroup.value== null){
        messages.push('This field is required')
    }
    if (feedbackbox.valuelength<=10){
        messages.push('Please leave more feedback')
    }
    if (messages.length>0){
        e.preventDefault()
        errorelement.innerText=messages.join(', ')
    }
    
})
</script> -->


<!-- <script>
    const selected=document.querySelector(".selected");
    const optionsContainer=document.querySelector(".options-container")
    // dont need all since only 1 selected tag etc
    const optionsList=document.querySelectorAll(".option")
    // multiple options tags
    selected.addEventListener("click",()=>{
        optionsContainer.classList.toggle("active");
        // 'toggle' either adds or takes away the active class
    });

    optionsList.forEach(o=>{
        // o references any single element
        o.addEventListener("click",()=>{
            selected.innerHTML=o.querySelector("label").innerHTML;
            optionsContainer.classList.remove("active");
            // once clicked, will give selected the value of the label
        });
    })
</script> -->

</html>

