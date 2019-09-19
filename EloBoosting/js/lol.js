 $(document).ready(function()
 {
    showPrice();
	changePrice();
	changeDescription()
	
	showPrice2();
	changePrice2();
	changeDescription2()
	
	showPrice3();
	changePrice3();
	changeDescription3()
	
$('#package_options').on('keyup keypress', function(e) {
  var keyCode = e.keyCode || e.which;
  if (keyCode === 13) { 
    e.preventDefault();
    return false;
  }
});
$('#package_options2').on('keyup keypress', function(e) {
  var keyCode = e.keyCode || e.which;
  if (keyCode === 13) { 
    e.preventDefault();
    return false;
  }
});
$('#package_options3').on('keyup keypress', function(e) {
  var keyCode = e.keyCode || e.which;
  if (keyCode === 13) { 
    e.preventDefault();
    return false;
  }
});

    $('#package_options').change(function()
    {
        showPrice();
		changePrice();
		changeDescription()
    });
	
    $('#package_options2').change(function()
    {
        showPrice2();
		changePrice2();
		changeDescription2()
    });
	
    $('#package_options3').change(function()
    {
        showPrice3();
		changePrice3();
		changeDescription3()
    });

    function showPrice()
    {
        var league = $("#league").val();
        var league2 = $("#league2").val();
        var division = $("#division").val();
        var division2 = $("#division2").val();
        var sUrl = "get_price.php";
		if($("#duo").is(':checked')){
		var duo = "[DUO]";}
		else{
		var duo = "";}
		if(league2 == "Master Tier"){
			$('#division2').hide();
		}
		else{
			$('#division2').show();
		}
        var postData = "league=" + league + "&league2=" + league2 + "&division=" + division + "&division2=" + division2 + "&duo=" + duo;
		
        $.ajax({
            type: "POST",
            url: sUrl,
            data: postData,
            dataType: 'html',
            success: function(msg) {
				$('#total_cost').html(msg);
				if(msg == "Wybierz prawidłową ligę i dywizję.") {
					$(function() {
						jQuery.fn.extend({
						disable: function(state) {
						return this.each(function() {
						this.disabled = state;
						});
						}
						});
    
						$("#next1").disable(true);
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
    
						$("#next1").disable(false);
						});
				}
						
					if($("#duo").is(':checked')){
						$(function() {
						jQuery.fn.extend({
						disable: function(state) {
						return this.each(function() {
						this.disabled = state;
						});
						}
						});
    
						$("#login").disable(true);
						$("#login").val('');
						$("#password").disable(true);
						$("#password").val('');
						});
					}
					else{
						$(function() {
						jQuery.fn.extend({
						disable: function(state) {
						return this.each(function() {
						this.disabled = state;
						});
						}
						});
    
						$("#login").disable(false);
						$("#password").disable(false);
						});
					}
				}
			})
        };

    function changePrice()
    {
        var league = $("#league").val();
        var league2 = $("#league2").val();
        var division = $("#division").val();
        var division2 = $("#division2").val();
		var price = $("#price").val();
        var sUrl = "get_price.php";
		if($("#duo").is(':checked')){
		var duo = "[DUO]";}
		else{
		var duo = "";}
        var postData = "league=" + league + "&league2=" + league2 + "&division=" + division + "&division2=" + division2 + "&duo=" + duo;
		
        $.ajax({
            type: "POST",
            url: sUrl,
            data: postData,
            dataType: 'html',
            success: function(msg) { $("#cena").val(msg); },
        });
    }
	
    function changeDescription()
    {
        var league = $("#league").val();
        var league2 = $("#league2").val();
        var division = $("#division").val();
        var division2 = $("#division2").val();
	if($("#duo").is(':checked')){
		var login = "";
		var password = "";
	}
	else{
		var login = $("#login").val();
		var password = $("#password").val();
	}
		var server = $("#server").val();
		var nick = $("#nick").val();
		var price = $("#price").val();
        var sUrl = "get_price.php";
		if($("#duo").is(':checked')){
		var duo = "[DUO]";}
		else{
		var duo = "";}
        var postData = "league=" + league + "&league2=" + league2 + "&division=" + division + "&division2=" + division2 + "&duo=" + duo;
		
        $.ajax({
            type: "POST",
            url: sUrl,
            data: postData,
            dataType: 'html',
            success: function(msg) { if(league2 == "Master Tier"){ 
			$("#opis").val("[BOOSTING]" + " " + duo + " " + league + " " + division + " - " + league2 + " " + nick + " " + server + " " + login + " " + password);}
			else{
			$("#opis").val("[BOOSTING]" + " " + duo + " " + league + " " + division + " - " + league2 + " " + division2 + " " + nick + " " + server + " " + login + " " + password); }},
        });
    }
	
	
    function showPrice2()
    {
        var leagueWins = $("#leagueWins").val();
        var divisionWins = $("#divisionWins").val();
        var amountofwins = $("#amountofwins").val();
        var sUrlWins = "get_priceWins.php";
		if($("#duoWins").is(':checked')){
		var duoWins = "[DUO]";}
		else{
		var duoWins = "";}
        var postDataWins = "leagueWins=" + leagueWins + "&divisionWins=" + divisionWins + "&amountofwins=" + amountofwins + "&duoWins=" + duoWins;
		
        $.ajax({
            type: "POST",
            url: sUrlWins,
            data: postDataWins,
            dataType: 'html',
            success: function(msg) {
				$('#total_costWins').html(msg);	
					if($("#duoWins").is(':checked')){
						$(function() {
						jQuery.fn.extend({
						disable: function(state) {
						return this.each(function() {
						this.disabled = state;
						});
						}
						});
    
						$("#loginWins").disable(true);
						$("#loginWins").val('');
						$("#passwordWins").disable(true);
						$("#passwordWins").val('');
						});
					}
					else{
						$(function() {
						jQuery.fn.extend({
						disable: function(state) {
						return this.each(function() {
						this.disabled = state;
						});
						}
						});
    
						$("#loginWins").disable(false);
						$("#passwordWins").disable(false);
						});
					}
				}
			})
        };

    function changePrice2()
    {
        var leagueWins = $("#leagueWins").val();
        var divisionWins = $("#divisionWins").val();
        var amountofwins = $("#amountofwins").val();
        var sUrlWins = "get_priceWins.php";
		if($("#duoWins").is(':checked')){
		var duoWins = "[DUO]";}
		else{
		var duoWins = "";}
        var postDataWins = "leagueWins=" + leagueWins + "&divisionWins=" + divisionWins + "&amountofwins=" + amountofwins + "&duoWins=" + duoWins;
		
        $.ajax({
            type: "POST",
            url: sUrlWins,
            data: postDataWins,
            dataType: 'html',
            success: function(msg) {
				$("#cenaWins").val(msg); },
        });
    }
	
    function changeDescription2()
    {
        var leagueWins = $("#leagueWins").val();
        var divisionWins = $("#divisionWins").val();
        var amountofwins = $("#amountofwins").val();
	if($("#duoWins").is(':checked')){
		var loginWins = "";
		var passwordWins = "";
	}
	else{
		var loginWins = $("#loginWins").val();
		var passwordWins = $("#passwordWins").val();
	}
		var serverWins = $("#serverWins").val();
		var nickWins = $("#nickWins").val();
		var priceWins = $("#priceWins").val();
        var sUrlWins = "get_priceWins.php";
		if($("#duoWins").is(':checked')){
		var duoWins = "[DUO]";}
		else{
		var duoWins = "";}
        var postDataWins = "leagueWins=" + leagueWins + "&divisionWins=" + divisionWins + "&amountofwins=" + amountofwins + "&duoWins=" + duoWins;
		
        $.ajax({
            type: "POST",
            url: sUrlWins,
            data: postDataWins,
            dataType: 'html',
            success: function(msg) { 
			$("#opisWins").val("[BOOSTING PER WIN]" + " " + duoWins + " " + "Gier:" +  " " + amountofwins + " " + leagueWins + " " + divisionWins + " " + nickWins + " " + serverWins + " " + loginWins + " " + passwordWins); },
        });
    }
	
    function showPrice3()
    {
        var leaguePlacements = $("#leaguePlacements").val();
        var amountofgames = $("#amountofgames").val();
        var sUrlPlacements = "get_pricePlace.php";
		if($("#duoPlacements").is(':checked')){
		var duoPlacements = "[DUO]";}
		else{
		var duoPlacements = "";}
        var postDataPlacements = "leaguePlacements=" + leaguePlacements + "&amountofgames=" + amountofgames + "&duoPlacements=" + duoPlacements;
		
        $.ajax({
            type: "POST",
            url: sUrlPlacements,
            data: postDataPlacements,
            dataType: 'html',
            success: function(msg) {
				$('#total_costPlacements').html(msg);	
					if($("#duoPlacements").is(':checked')){
						$(function() {
						jQuery.fn.extend({
						disable: function(state) {
						return this.each(function() {
						this.disabled = state;
						});
						}
						});
    
						$("#loginPlacements").disable(true);
						$("#loginPlacements").val('');
						$("#passwordPlacements").disable(true);
						$("#passwordPlacements").val('');
						});
					}
					else{
						$(function() {
						jQuery.fn.extend({
						disable: function(state) {
						return this.each(function() {
						this.disabled = state;
						});
						}
						});
    
						$("#loginPlacements").disable(false);
						$("#passwordPlacements").disable(false);
						});
					}
				}
			})
        };

    function changePrice3()
    {
        var leaguePlacements = $("#leaguePlacements").val();
        var amountofgames = $("#amountofgames").val();
        var sUrlPlacements = "get_pricePlace.php";
		if($("#duoPlacements").is(':checked')){
		var duoPlacements = "[DUO]";}
		else{
		var duoPlacements = "";}
        var postDataPlacements = "leaguePlacements=" + leaguePlacements + "&amountofgames=" + amountofgames + "&duoPlacements=" + duoPlacements;
		
        $.ajax({
            type: "POST",
            url: sUrlPlacements,
            data: postDataPlacements,
            dataType: 'html',
            success: function(msg) {
				$("#cenaPlacements").val(msg); },
        });
    }
	
    function changeDescription3()
    {
        var leaguePlacements = $("#leaguePlacements").val();
        var amountofgames = $("#amountofgames").val();
	if($("#duoPlacements").is(':checked')){
		var loginPlacements = "";
		var passwordPlacements = "";
	}
	else{
		var loginPlacements = $("#loginPlacements").val();
		var passwordPlacements = $("#passwordPlacements").val();
	}
		var serverPlacements = $("#serverPlacements").val();
		var nickPlacements = $("#nickPlacements").val();
		var pricePlacements = $("#pricePlacements").val();
        var sUrlPlacements = "get_pricePlace.php";
		if($("#duoPlacements").is(':checked')){
		var duoPlacements = "[DUO]";}
		else{
		var duoPlacements = "";}
        var postDataPlacements = "leaguePlacements=" + leaguePlacements + "&amountofgames=" + amountofgames + "&duoPlacements=" + duoPlacements;
		
        $.ajax({
            type: "POST",
            url: sUrlPlacements,
            data: postDataPlacements,
            dataType: 'html',
            success: function(msg) { 
			$("#opisPlacements").val("[PLACEMENTY]" + " " + duoPlacements + " " + "Gier:" + " " + amountofgames + " " + leaguePlacements + " " + nickPlacements + " " + serverPlacements + " " + loginPlacements + " " + passwordPlacements); },
        });
    }

 });

