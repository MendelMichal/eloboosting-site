 $(document).ready(function()
 {
    showPrice();
	changePrice();
	changeDescription()
	
	showPrice2();
	changePrice2();
	changeDescription2()
	
$('#package_options4').on('keyup keypress', function(e) {
  var keyCode = e.keyCode || e.which;
  if (keyCode === 13) { 
    e.preventDefault();
    return false;
  }
});

    $('#package_options4').change(function()
    {
        showPrice();
		changePrice();
		changeDescription()
    });

	$('#package_options5').change(function()
    {
        showPrice2();
		changePrice2();
		changeDescription2()
    });
	
    function showPrice()
    {
        var amountofhours = $("#amountofhours").val();
        var sUrl = "get_priceCoach.php";
        var postData = "amountofhours=" + amountofhours;
		
        $.ajax({
            type: "POST",
            url: sUrl,
            data: postData,
            dataType: 'html',
            success: function(msg) {
				$('#total_costCoaching').html(msg + "zł");
				if(msg == "Wybierz prawidłową ligę i dywizję.") {
					$(function() {
						jQuery.fn.extend({
						disable: function(state) {
						return this.each(function() {
						this.disabled = state;
						});
						}
						});
    
						$("#next4").disable(true);
						});
				}
				else {
						$(function() {
						jQuery.fn.extend({
						disable: function(state) {
						return this.each(function() {
						this.disabled = state;
						});
						}
						});
    
						$("#next4").disable(false);
						});
					}
				}
			})
        };

    function changePrice()
    {
        var amountofhours = $("#amountofhours").val();
        var sUrl = "get_priceCoach.php";
        var postData = "amountofhours=" + amountofhours;
		
        $.ajax({
            type: "POST",
            url: sUrl,
            data: postData,
            dataType: 'html',
            success: function(msg) { $("#cenaCoach").val(msg); },
        });
    }
	
    function changeDescription()
    {
        var amountofhours = $("#amountofhours").val();
		var server = $("#server").val();
		var nick = $("#nick").val();
        var sUrl = "get_priceCoach.php";
        var postData = "amountofhours=" + amountofhours;
		
        $.ajax({
            type: "POST",
            url: sUrl,
            data: postData,
            dataType: 'html',
            success: function(msg) { $("#opisCoach").val("[COACHING]" + " " + "[COACHER 1]" + " " + "Liczba godzin:" + amountofhours + " " + nick + " " + server); },
        });
    }
	
	    function showPrice2()
    {
        var amountofhours2 = $("#amountofhours2").val();
        var sUrl = "get_priceCoach2.php";
        var postData = "amountofhours2=" + amountofhours2;
		
        $.ajax({
            type: "POST",
            url: sUrl,
            data: postData,
            dataType: 'html',
            success: function(msg) {
				$('#total_costCoaching2').html(msg + "zł");
				if(msg == "Wybierz prawidłową ligę i dywizję.") {
					$(function() {
						jQuery.fn.extend({
						disable: function(state) {
						return this.each(function() {
						this.disabled = state;
						});
						}
						});
    
						$("#next5").disable(true);
						});
				}
				else {
						$(function() {
						jQuery.fn.extend({
						disable: function(state) {
						return this.each(function() {
						this.disabled = state;
						});
						}
						});
    
						$("#next5").disable(false);
						});
					}
				}
			})
        };

    function changePrice2()
    {
        var amountofhours2 = $("#amountofhours2").val();
        var sUrl = "get_priceCoach2.php";
        var postData = "amountofhours2=" + amountofhours2;
		
        $.ajax({
            type: "POST",
            url: sUrl,
            data: postData,
            dataType: 'html',
            success: function(msg) { $("#cenaCoach2").val(msg); },
        });
    }
	
    function changeDescription2()
    {
        var amountofhours2 = $("#amountofhours2").val();
		var server2 = $("#server2").val();
		var nick2 = $("#nick2").val();
        var sUrl = "get_priceCoach2.php";
        var postData = "amountofhours2=" + amountofhours2;
		
        $.ajax({
            type: "POST",
            url: sUrl,
            data: postData,
            dataType: 'html',
            success: function(msg) { $("#opisCoach2").val("[COACHING]" + " " + "[COACHER 2]" + " " + "Liczba godzin:" + amountofhours2 + " " + nick2 + " " + server2); },
        });
    }
	
 });

