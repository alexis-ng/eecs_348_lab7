function validate(){
    var first = document.getElementById("pass1").value
    var second = document.getElementById("pass2").value
    console.log(first.length)
    if (first.length < 8 && second.length < 8){
        alert("Password must be at least 8 characters")
    }
    else if (first != second){
        alert("Passwords are not the same")
    }
    else{
        alert("success!")
    }
}
