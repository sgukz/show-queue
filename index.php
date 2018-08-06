<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test - ระบบแสดงคิวการใช้บริการโรงพยาบาลร้อยเอ็ด</title>
</head>
<body>
    <script langquage='javascript'>
     url=document.location;
     if ((url=="https://services-link.herokuapp.com/") || (url=="https://services-link.herokuapp.com")){
         document.write("<head><title>ระบบแสดงคิวการใช้บริการโรงพยาบาลร้อยเอ็ด</title></head>");
         document.write('<frameset cols="*">');
         document.write('<frame src="http://49.231.5.51/api-queue-reh/">');
         document.write("</frameset>");
    }
     if((url=="https://services-link.herokuapp.com") || (url=="https://services-link.herokuapp.com/")){
         document.write("<head><title>ระบบแสดงคิวการใช้บริการโรงพยาบาลร้อยเอ็ด</title></head>");
         document.write('<frameset cols="*">');
         document.write('<frame src="http://49.231.5.51/api-queue-reh/">');
         document.write("</frameset>");
     }
    </script>
    <h1>Hi, My site</h1>
</body>
</html>
