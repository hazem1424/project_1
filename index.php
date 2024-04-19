<?php 
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>

<?php include_once './parts/header.php'; ?>

<center>
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto ">
      <img src="images\s.png" >
      <h1 class="display-4 fw-normal">اربح مع حازم</h1>
      <p class="lead fw-normal">سيتم السحب على ايفون 15</p>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <h3 id="countdown"></h3>
      
    <!--  <a class="btn btn-outline-secondary" href="#">Coming soon</a> --->
    </div>
    <h3>للدخول في السحب اتبع ما يلي :</h3>
  <ul class="list-group list-group-flush">
  <li id="list" class="list-group-item">متابعة صفحتي على الانستغرام</li>
  <li id="list" class="list-group-item">التعليق في جميع البوستات الموجودة في الحساب</li>
  <li id="list" class="list-group-item">مشاركة الحساب على خمسة اشخاص</li>
  <li id="list" class="list-group-item">سيتم اخيار الفائز من تعليقات البوست الاخير</li>
  <li id="list" class="list-group-item"> الرابح سيحصل على ايفون 15 وحماية كاملة على الجهاز</li>
</ul>
  </div>


<div class="container">
<div class="position-relative  text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">


    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
    <h3>الرجاء ادخال معلوماتك</h3>
<form>

  <div class="mb-3">
    <label for="firstName" class="form-label">الإسم الأول</label>
    <input type="text" name="firstName" id="firstName" class="form-control" value="<?php echo $firstName ?>">
    <div class="form-text error"><?php echo $errors['firstNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">الإسم الأخير</label>
    <input type="text" name="lastName" id="lastName" class="form-control" value="<?php echo $lastName ?>">
    <div class="form-text error"><?php echo $errors['lastNameError'] ?></div>
  </div>

 <div class="mb-3">
    <label for="email" class="form-label">البريد الإلكتروني</label>
    <input type="text" name="email" class="form-control" id="email" value = "<?php echo $email ?>">
    <div class="form-text error"><?php echo $errors['emailError'] ?></div>
  </div> 
  <button type="submit" name="submit" class="btn btn-primary">تسجيل</button>
</form>
</div>
  </div>
  </div>
   
   
</center>


<div class="loader-con">
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>

<!-- Button trigger modal -->
<div class = "d-grid gap-2 col-6 mx-auto my-5">
<button type="button" id="winner" class="btn btn-primary">
  اختيار الرابح
</button>
</div>
<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user): ?>
        <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']);?></h1>
      <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

<?php include_once './parts/footer.php'; ?>
