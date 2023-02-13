
function validation(){
    let name = document.getElementById("name").value.trim();
    let umur = document.getElementById("umur").value.trim();
    let alamat = document.getElementById("alamat").value.trim();
    let nomor = document.getElementById("nomor").value.trim();

    alert("halo");
    
    if(nama == ""){
        alert("Need Name!");
        return false;
    }else if(umur == ""){
        alert("Need Umur!");
        return false;
    }else if(alamat == ""){
        alert("Need Alamat!");
        return false;
    }else if(nomor == ""){
        alert("Need Nomor!");
        return false;
    }

    if(name.length < 5 || nama.length > 20){
        alert("Name must be atleast 5-20 characters!");
        return false;
    }

    if(umur < 20){
        alert("Umur must be atleast more than 20 years old!");
        return false;
    }

    if(alamat.length < 10 || alamat.length > 40){
        alert("Alamat must be atleast 10-40 characters!");
        return false;
    }

    if(nomor[0] != "0" && nomor[1] != "1"){
        alert("No. Telp. must start by 08!");
        return false;
    }
    return true;
}