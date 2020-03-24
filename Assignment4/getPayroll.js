function getPayroll() {
	var employeeHours=[];
	var counter=0;
	while(counter>=0)
	{
		var hours=prompt("Enter the number of hours worked this week.");
		if(hours==-1)
		{
			counter=-2;
		}
		else
		{
			employeeHours[counter]=hours;
		}
		counter++;
	}
	document.write("<table style=\"text-align:center\">");
	document.write("<tr>");
	document.write("<td> # </td>");
	document.write("<td> Hours Worked </td>");
	document.write("<td> Pay for the Week </td>");
	document.write("</tr>");
	for(i=0;i<employeeHours.length;i++)
	{
		var pay=0;
		var hours=employeeHours[i];
		if(hours<=40)
		{
			pay=hours*15;
		}
		else
		{
			pay=600+((hours-40)*22.5);
		}
		pay=Math.round(pay*100)/100;
		document.write("<tr>");
		document.write("<td> "+(i+1)+" </td>");
		document.write("<td> "+hours+" </td>");
		document.write("<td> $"+pay+" </td>");
		document.write("</tr>");
	}
	document.write("</table>");
}