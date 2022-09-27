const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});

// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})

// date time 
const dateTime = document.querySelector('.date')

setInterval(()=>{
	dateTime.innerHTML = moment().format("MMMM D YYYY, dddd, h:mm:ss A");
}, 1000)

document.querySelector('.profile-img').addEventListener('click', function(){
	
});

// user page
function showUserOption(icon){
	const userOption = document.querySelector('.user-option');
	if(userOption.classList.contains('show')){
		userOption.classList.remove('show');
		icon.classList.remove('bx-x');
		icon.classList.add('bx-filter');
		userOption.style.marginRight = '-200px';
	}else{
		userOption.classList.add('show');
		icon.classList.add('bx-x');
		icon.classList.remove('bx-filter');
		userOption.style.marginRight = '0';
	}
	
}

// add user page
function chooseGender(gender){
	if(gender == 'male'){
		document.getElementById('male').checked = true;
		document.querySelector('.icon-female').classList.remove('active');
		document.querySelector('.icon-male').classList.add('active');
	}else{
		document.getElementById('female').checked = true
		document.querySelector('.icon-male').classList.remove('active')
		document.querySelector('.icon-female').classList.add('active');
	}
}

function chooseRole(role){
	if(role == 'admin'){
		document.getElementById('admin').checked = true;
		document.querySelector('.icon-hr').classList.remove('active');
		document.querySelector('.icon-employee').classList.remove('active');
		document.querySelector('.icon-admin').classList.add('active');
	}else if(role == 'hr'){
		document.getElementById('hr').checked = true;
		document.querySelector('.icon-admin').classList.remove('active');
		document.querySelector('.icon-employee').classList.remove('active');
		document.querySelector('.icon-hr').classList.add('active');
	}else{
		document.getElementById('employee').checked = true;
		document.querySelector('.icon-admin').classList.remove('active');
		document.querySelector('.icon-hr').classList.remove('active');
		document.querySelector('.icon-employee').classList.add('active');
	}
}

document.getElementById('avatar').addEventListener('change', function(e){
	const avatar = document.querySelector('.avatar img')
	const [file] = this.files
	if (file) {
		avatar.src = URL.createObjectURL(file)
  	}
});

// reset form
function resetForm(){
	document.querySelector('#form').reset();
	document.querySelector('input').checked = false;
	let radio = document.querySelectorAll('.radio i');
	radio.forEach(function(item){
		item.classList.remove('active');
	});
}

// alert 
if(document.querySelector('.alert-close')){
	document.querySelector('.alert-close').addEventListener('click', function(){
		document.querySelector('.alert-container').style.display  = "none";
	});
}
