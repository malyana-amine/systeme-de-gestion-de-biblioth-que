

function update(id) {
    let btn_titleid = "title"+id;
    let btn_descriptionid = "description" + id;
    let btn_imageid = "image"+id; 

    
    let btn_title = document.getElementById(btn_titleid).textContent;

    let btn_description = document.getElementById(btn_descriptionid).textContent;

    let btn_image = document.getElementById(btn_imageid).getAttribute("src");
    console.log(btn_image);
    // remplire.
    

    document.getElementById("recipient-name1").value = btn_title;
    
    document.getElementById("hid").value = id ;

    document.getElementById("message-text1").value = btn_description;

    document.getElementById("imageupdat").setAttribute("src",btn_image);

    }

    // get first letre of the user name 


    let flname = document.getElementById("flname").textContent;
    let profpic = document.getElementById("profilpic").textContent = flname[0].toUpperCase() ;

    