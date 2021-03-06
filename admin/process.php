<?php
session_start();
require_once '../config/database.php';
require_once '../config/Models.php';

$action = $_GET['action'];

switch ($action) {

	case 'updateInformation' :
		updateInformation();
		break;

	case 'jobRequest' :
		jobRequest();
		break;

	case 'addAccount' :
		addAccount();
		break;

	case 'addProject' :
		addProject();
		break;

	case 'addFAQ' :
		addFAQ();
		break;

	case 'addJobFunction' :
		addJobFunction();
		break;

	case 'updateAccounts' :
		updateAccounts();
		break;

	case 'updateRequest' :
		updateRequest();
		break;

	case 'updateServices' :
		updateServices();
		break;

	case 'updateFaq' :
		updateFaq();
		break;

	case 'updateProjects' :
		updateProjects();
		break;

	case 'updateDownloads' :
		updateDownloads();
		break;

	case 'addFileFunction' :
		addFileFunction();
		break;

	case 'removeAccounts' :
		removeAccounts();
		break;

	case 'removeJobFunction' :
		removeJobFunction();
		break;

	case 'removeFaq' :
		removeFaq();
		break;

	case 'removeProjects' :
		removeProjects();
		break;

	case 'removeDownloads' :
		removeDownloads();
		break;

	case 'setInterViewDate' :
		setInterViewDate();
		break;

	case 'hireApplicant' :
		hireApplicant();
		break;

	case 'denyResume' :
		denyResume();
		break;

	case 'login' :
		login();
		break;

	case 'logout' :
		logout();
		break;

	case 'removeCompany' :
		removeCompany();
		break;

	case 'removeJob' :
		removeJob();
		break;

	case 'removeCandidate' :
		removeCandidate();
		break;

	default :
}

function updateInformation()
{
	$Id = $_GET['Id'];

	$job = job();
	$job->obj['comment'] = $_POST['comment'];
	$job->update("Id=$Id");

	header('Location: index.php?view=jobDetail&success=You have updated the information&Id=' . $Id);
}

function addAccount()
{
	$username = $_POST['username'];
	$level = $_POST['level'];
	$checkUser = admin()->get("username='$username'");

	if($checkUser != '1'){
		if($level == 'hr'){
			$admin = admin();
			$admin->obj['firstName'] = $_POST['firstName'];
			$admin->obj['lastName'] = $_POST['lastName'];
			$admin->obj['username'] = $_POST['username'];
			$admin->obj['password'] = $_POST['password'];
			$admin->obj['level'] = $_POST['level'];
			$admin->obj['jobFunctionId'] = $_POST['jobFunctionId'];
			$admin->obj['email'] = $_POST['email'];
			$admin->create();
		}else{
			$admin = admin();
			$admin->obj['firstName'] = $_POST['firstName'];
			$admin->obj['lastName'] = $_POST['lastName'];
			$admin->obj['username'] = $_POST['username'];
			$admin->obj['password'] = $_POST['password'];
			$admin->obj['level'] = $_POST['level'];
			$admin->obj['email'] = $_POST['email'];
			$admin->create();
		}
		header('Location: ../admin/?view=accounts&message=You have successfully created an account.');
	}else{
		header('Location: ../admin/?view=accounts&error=User already exist!');
	}
}

function addFAQ()
{
	$faq = faq();
	$faq->obj['question'] = $_POST['question'];
	$faq->obj['answer'] = $_POST['answer'];
	$faq->obj['level'] = $_POST['level'];
	$faq->create();

	header('Location: ../admin/?view=faq&message=You have successfully added a FAQ.');
}

function addProject()
{
	$upload = uploadFile($_FILES['upload_file']);
	if ($upload)
	{
		$projects = projects();
		$projects->obj['title'] = $_POST['title'];
		$projects->obj['content'] = $_POST['content'];
		$projects->obj['uploadedImage'] = $upload;
		$projects->obj['createDate'] = "NOW()";
		$projects->create();

		header('Location: ../admin/?view=projects&message=You have successfully added a new project.');
	}else{
		header('Location: ../admin/?error=Not uploaded');
	}
}

function addJobFunction()
{
	$jf = job_function();
	$jf->obj['option'] = $_POST['option'];
	$jf->create();

	header('Location: ../admin/?view=jobCategory&message=You have succesfully added a new Job Category.');
}

function updateAccounts()
{
	$Id = $_POST['Id'];
	$admin = admin();
	$admin->obj['username'] = $_POST['username'];
	$admin->obj['firstName'] = $_POST['firstName'];
	$admin->obj['lastName'] = $_POST['lastName'];
	$admin->obj['level'] = $_POST['level'];
	$admin->update("Id='$Id'");

	header('Location: ../admin/?view=accounts&message=You have successfully updated a Request');
}

function updateRequest()
{
	$Id = $_POST['Id'];
	$job = job();
	$job->obj['comment'] = $_POST['comment'];
	$job->update("Id='$Id'");

	header('Location: ../admin/?view=talentDetail&Id='. $Id . '&message=You have successfully updated a Request');
}

function updateServices()
{
	$Id = $_POST['Id'];
	$jf = job_function();
	$jf->obj['option'] = $_POST['option'];
	$jf->obj['title'] = $_POST['title'];
	$jf->obj['header'] = $_POST['header'];
	$jf->obj['description'] = $_POST['description'];
	$jf->update("Id='$Id'");

	header('Location: ../admin/?view=services&message=You have succesfully updated a Service.');
}

function updateFaq()
{
	$Id = $_POST['Id'];
	$faq = faq();
	$faq->obj['question'] = $_POST['question'];
	$faq->obj['answer'] = $_POST['answer'];
	$faq->obj['level'] = $_POST['level'];
	$faq->update("Id='$Id'");

	header('Location: ../admin/?view=faq&message=You have succesfully updated a FAQ.');
}

function updateProjects()
{
	$upload = uploadFile($_FILES['upload_file']);
	if ($upload)
	{
		$Id = $_POST['Id'];
		$projects = projects();
		$projects->obj['title'] = $_POST['title'];
		$projects->obj['content'] = $_POST['content'];
		$projects->obj['uploadedImage'] = $upload;
		$projects->update("Id='$Id'");

		header('Location: ../admin/?view=projects&message=You have succesfully updated a Projects.');
	}else{
		header('Location: ../admin/?view=projects&error=File not uploaded.');
	}
}

function updateDownloads()
{
	$upload = uploadFile($_FILES['upload_file']);
	if ($upload)
	{
		$Id = $_POST['Id'];
		$downloads = downloads();
		$downloads->obj['fileName'] = $_POST['fileName'];
		$downloads->obj['uploadedFile'] = $upload;
		$downloads->update("Id='$Id'");

		header('Location: ../admin/?view=downloads&message=You have succesfully updated a Downloads.');
	}else{
		header('Location: ../admin/?view=downloads&error=File not uploaded.');
	}
}

function addFileFunction(){

		$upload = uploadFile($_FILES['upload_file']);
		if ($upload)
		{
			$res = downloads();
			$res->obj['fileName'] = $_POST["fileName"];
			$res->obj['uploadedFile'] = $upload;
			$res->create();
			header('Location: ../admin/?view=downloads&message=You have succesfully added a new file.');
		}
		else{
			header('Location: ../admin/?error=Not uploaded');
		}
}
function login()
{
	// if we found an error save the error message in this variable
	$username = $_POST['username'];
	$password = $_POST['password'];
	$result = admin()->get("username='$username' and password = '$password' and level='admin'");
	if ($result){
		$_SESSION['admin_session'] = $username;
		header('Location: index.php');
	}
	else {
			header('Location: index.php?error=User not found in the Database');
	}
}


function jobRequest()
{
	if ($_GET['result']=="approve"){
		$result = 1;
	}
	else{
		$result = -1;
	}

	$Id = $_GET['Id'];
	$job = job();
	$job->obj['isApproved'] = $result;
	$job->update("Id='$Id'");

	$job = job()->get("$Id='$Id'");

	if ($result==1){
		// Send email
		$content = __approvedJobRequestEmailMessage();
		sendEmail($job->workEmail, $content);
			header('Location: index.php?view=jobDetail&success=You have approved this request&Id=' . $Id);
	}else{
		// Send email
		$content = __moreInfoEmailMessage();
		sendEmail($job->workEmail, $content);
			header('Location: index.php?view=jobDetail&success=Request has been sent&Id=' . $Id);
	}

}

function setInterviewDate()
{
	$email = $_POST['email'];
	$Id = $_POST['resumeId'];
	$date = $_POST['date'];
	$time = $_POST['time'];

	$intDate = interview_date();
	$intDate->obj['resumeId'] = $Id;
	$intDate->obj['date'] = $date;
	$intDate->obj['time'] = $time;
	$intDate->create();

	$resume = resume();
	$resume->obj['isApproved'] = "1";
	$resume->update("Id='$Id'");

	$content = "We have considered your application. Please be available on the schedule below<br>
							for your interview.<br><br>
							Date = $date<br>
							Time = $time<br><br>
							Teamire";
	sendEmail($email, $content);

	header('Location: index.php?view=resumeDetail&You have scheduled an interview for this applicant&Id=' . $Id);
}

function hireApplicant()
{
	if ($_GET['result']=="approve"){
		$result = '1';
		__createEmployeeLogin($_GET['Id'], $_GET['jobId']);
	}
	else{
		$result = '-1';
	}

	$Id = $_GET['Id'];
	$resume = resume();
	$resume->obj['isHired'] = $result;
	$resume->update("Id='$Id'");

	header('Location: index.php?view=scheduleInterview');
}

function __createEmployeeLogin($Id, $jobId){

	$resume = resume()->get("Id='$Id'");

	// Create account
	$user = user();
	$user->obj['username'] =  "E" . round(microtime(true));
	$user->obj['password'] = "temppassword";
	$user->obj['firstName'] = $resume->firstName;
	$user->obj['lastName'] = $resume->lastName;
	$user->obj['level'] = "employee";
	$user->create();

	$emp = employee();
	$emp->obj['jobId'] = $jobId;
	$emp->obj['username'] = $user->obj['username'];
	$emp->obj['createDate'] = 'NOW()';
	$emp->create();

	$res = resume();
	$res->obj['username'] = $user->obj['username'];
	$res->update("Id='$Id'");

	// Send email
	$content = "Congratulations!<br><br>
							You are hired. We have approved your application. Please use the credentials we have created for you.<br>
							Username: " . $user->obj['username'] . "<br>
							Password: " . $user->obj['password'] . "<br><br>
							To login to our website. Please click the link below:<br>
							<a href='www.bandbajabaraath.kovasaf.com/employee/index.php?view=changepassword'>www.bandbajabaraath.kovasaf.com</a><br><br>
							Teamire";
	sendEmail($resume->email, $content);
}

function denyResume()
{
	$Id=$_GET['Id'];
	$resume = resume();
	$resume->obj['isApproved'] = "-1";
	$resume->update("Id='$Id'");

	$resume = resume()->get("Id='$Id'");

	// Send email
	$content = __moreInfoEmailMessage();
	sendEmail($resume->email, $content);

	header('Location: index.php?view=resumeList&isApproved=0&jobId=' . $resume->jobId);
}

function removeCompany()
{
	$Id = $_GET['Id'];
	company()->delete("Id='$Id'");

	header('Location: ../admin/?view=companies&message=Succesfully Deleted');
}

function removeJob()
{
	$Id = $_GET['Id'];
	job()->delete("Id='$Id'");

	header('Location: ../admin/?view=jobList&message=Succesfully Deleted');
}

function removeCandidate()
{

	$Id = $_GET['Id'];
	resume()->delete("Id='$Id'");

	header('Location: ../admin/?view=candidates&message=Succesfully Deleted');
}
function logout()

{
	//logout.php
session_start();
session_destroy();
header('Location: index.php');
	exit;
}

function removeAccounts()
{
	$Id = $_GET['Id'];
	$admin = admin();
	$admin->obj['isDeleted'] = "1";
	$admin->update("Id='$Id'");

	$admin = admin()->get("Id='$Id'");
	$admin->username;
	$admin->level;

	if($admin->level == "hr"){
		$hr = hr()->get("username='$admin->username'");
		$id = $hr->Id;

		$hr = hr();
		$hr->obj['isDeleted'] = "1";
		$hr->update("Id='$id'");
	}

	header('Location: ../admin/?view=accounts&message=Succesfully Deleted');
}

function removeJobFunction()
{
	$Id = $_GET['Id'];
	$jobFunc = job_function();
	$jobFunc->obj['isDeleted'] = "1";
	$jobFunc->update("Id='$Id'");

	header('Location: ../admin/?view=jobCategory&message=Succesfully Deleted');
}

function removeFaq()
{
	$Id = $_GET['Id'];
	$faq = faq();
	$faq->obj['isDeleted'] = "1";
	$faq->update("Id='$Id'");

	header('Location: ../admin/?view=faq&message=Succesfully Deleted');
}

function removeProjects()
{
	$Id = $_GET['Id'];
	$projects = projects();
	$projects->obj['isDeleted'] = "1";
	$projects->update("Id='$Id'");

	header('Location: ../admin/?view=projects&message=Succesfully Deleted');
}

function removeDownloads()
{
	$Id = $_GET['Id'];
	$downloads = downloads();
	$downloads->obj['isDeleted'] = "1";
	$downloads->update("Id='$Id'");

	header('Location: ../admin/?view=downloads&message=Succesfully Deleted');
}

/* ======================== Email Messages ==============================*/

function __approvedJobRequestEmailMessage(){
	return "We have approved your request.<br><br>
					Teamire";
}

function __infoJobRequestEmailMessage(){
	return "Hi, we need more information regarding your request. Someone from our team<br>
					will contact you.<br><br>
					Teamire";
}

function __moreInfoEmailMessage(){
	return "Hi, we have received and reviewed your request but we still haven't approved it yet as it did not<br><br>
					meet our requirements. Someone from our team will contact you through your contact number you provided.<br><br>
					Teamire";
}
?>
