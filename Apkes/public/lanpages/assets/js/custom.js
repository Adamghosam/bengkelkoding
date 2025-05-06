var scroll = new SmoothScroll('a[href*="#"]');
var url = encodeURI('https://re-cloud.id');
var text = "Yuk ikutan tuntaskan setiap tantangan Re-Cloud, dan menangkan hadiah dengan total $13,000! Daftar sekarang https://re-cloud.id";
AOS.init({
	duration: 650,
	offset: 200,
	once: true,
});
jsSocials.shares.telegram = {
	logo: "fa fa-telegram",
	shareUrl: `https://t.me/share/url?url=${url}&text=${text}`
};
jsSocials.shares.linkedin = {
	logo: "fa fa-linkedin-square",
	shareUrl: `https://www.linkedin.com/sharing/share-offsite/?url=${url}`
};
$("#share").jsSocials({
	showLabel: false,
	showCount: false,
	shareIn: "popup",
	shares: ["twitter", "facebook", "linkedin", "whatsapp", "telegram"]
});

$(document).ready(function( $ ) {
	$('.counter').counterUp({
		delay: 10,
		time: 1000
	});
	// $('.daftar').click(function(e) {
	// 	e.preventDefault();
	// 	fbq('trackCustom', 'DaftarReCLoud');
	// 	setTimeout(() => {
	// 		window.open('https://apps.codepolitan.com/user/login?callback=re-cloud', '_blank');
	// 	}, 500);
	// });
	$('.daftar').click(function(e) {
		e.preventDefault();
		fbq('trackCustom', 'DaftarReCLoud');
		setTimeout(() => {
			window.open('https://re-cloud.id/leaderboard', '_blank');
		}, 500);
	});
});