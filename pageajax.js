function load(pageType)
{
	if(pageType=="owner")
	{
		$.ajax({
		url: "owner.php",
		success:function(data){
		  $('#content').html(data);
		}
		});
	}
	else if(pageType=="vehicle")
	{
		$.ajax({
		url: "vehicle.php",
		success:function(data){
		  $('#content').html(data);
		}
		});		
	}
	else if(pageType=="allvehicles") 
	{
		$.ajax({
		url: "allvehicles.php",
		success:function(data){
		  $('#content').html(data);
		}
		});
	} 
	else if(pageType=="allowners")
	{
		$.ajax({
		url: "allowners.php",
		success:function(data){
		  $('#content').html(data);
		}
		});
	}
}