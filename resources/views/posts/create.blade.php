
<title>SUZUKI</title><body style="background-color: #00F5F5
;">
<div align="center"> 

<font size="35px" color="green">新增機車型號</font>


<form action="{{ route('posts.store') }}" method="POST">

    @csrf

    <label style="font-size:25px;">名稱：

        <textarea name="content">

</textarea>
     

    </label><br>
   
   
    <br>


<input style="background-color:white;color:black;width:100px;height:30px;" type="submit" value="提交"></input>
<br>

<input style="background-color:white;color:black;width:100px;height:30px;" type ="button" onclick="javascript:location.href='http://localhost:888/LaravelDemo-master(f)/public/'" value="回到首頁"></input>
</div>

</body>