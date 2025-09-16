<h2>enroll</h2>


<form action="<?=base_url('dashboard_mahasiswa/course/'.$course_spesific['course_name'])?>" method="post" >
<p><?= $course_spesific['course_name'] ?> </p>
<b><label>enroll cuy</label></b>
<br>
<input type="text" name="enroll_code_from_mahasiswa">
<button>submit</button>
</form>