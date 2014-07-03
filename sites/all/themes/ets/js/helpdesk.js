function bldgSelect(x) {

document.ticket.bldg.options.length = 0;
document.ticket.lab.options.length = 0;

if (x == "1") {
document.ticket.bldg.options[0]=new Option("Select building","");
document.ticket.bldg.options[1]=new Option("Avenue Apartments", "OAK- Avenue Apartments");
document.ticket.bldg.options[2]=new Option("B Building","OAK- B Building");
document.ticket.bldg.options[3]=new Option("Barclay Simpson Sculpture Studio","OAK- Barclay Simpson Sculpture Studio");
document.ticket.bldg.options[4]=new Option("Blattner Print Studio","OAK- Blattner Print Studio");
document.ticket.bldg.options[5]=new Option("Café","OAK- Café");
document.ticket.bldg.options[6]=new Option("CAPL / ET (5275 Broadway)","OAK- CAPL / ET (5275 Broadway)");
document.ticket.bldg.options[7]=new Option("Carriage House","OAK- Carriage House");
document.ticket.bldg.options[8]=new Option("Clifton Hall","OAK- Clifton Hall");
document.ticket.bldg.options[9]=new Option("Counseling Services (5299 College)","OAK- Counseling Services (5299 College)");
document.ticket.bldg.options[10]=new Option("Facilities","OAK- Facilities");
document.ticket.bldg.options[11]=new Option("First Year Studios (5288 College)","OAK- First Year Studios (5288 College)");
document.ticket.bldg.options[12]=new Option("Founder's Hall","OAK- Founder's Hall");
document.ticket.bldg.options[13]=new Option("Founder's Hall (Meyer Library)","OAK- Founder's Hall (Meyer Library)");
document.ticket.bldg.options[14]=new Option("Founder's Hall (Nahl Hall)","OAK- Founder's Hall (Nahl Hall)");
document.ticket.bldg.options[15]=new Option("Irwin Student Center","OAK- Irwin Student Center");
document.ticket.bldg.options[16]=new Option("Macky Hall","OAK- Macky Hall");
document.ticket.bldg.options[17]=new Option("Martinez Annex","OAK- Martinez Annex");
document.ticket.bldg.options[18]=new Option("Martinez Hall","OAK- Martinez Hall");
document.ticket.bldg.options[19]=new Option("North/South Galleries","OAK- North/South Galleries");
document.ticket.bldg.options[20]=new Option("Oliver Art Center","OAK- Oliver Art Center");
document.ticket.bldg.options[21]=new Option("Ralls Studio","OAK- Ralls Studio");
document.ticket.bldg.options[22]=new Option("Shaklee Building","OAK- Shaklee Building");
document.ticket.bldg.options[23]=new Option("Terrace Apartments (4Plex)","OAK- Terrace Apartments (4Plex)");
document.ticket.bldg.options[24]=new Option("Textiles / L1 - L4 Classrooms (5301 Broadway)","OAK- Textiles / L1 - L4 Classrooms (5301 Broadway)");
document.ticket.bldg.options[25]=new Option("Treadwell Hall","OAK- Treadwell Hall");
document.ticket.bldg.options[26]=new Option("Webster Hall","OAK- Webster Hall");

document.ticket.lab.options[0]=new Option("Select lab","");
document.ticket.lab.options[1]=new Option("4D","Labs - Oak 4D");
document.ticket.lab.options[2]=new Option("Animation","Labs - Oak Animation");
document.ticket.lab.options[3]=new Option("Core","Labs - Oak Core");
document.ticket.lab.options[4]=new Option("Lab A","Labs - Oak Lab A");
document.ticket.lab.options[5]=new Option("Lab B","Labs - Oak Lab B");
document.ticket.lab.options[6]=new Option("Media Arts","Labs - Oak Media Arts");
document.ticket.lab.options[7]=new Option("Photo","Labs - Oak Photo");
document.ticket.lab.options[8]=new Option("Textiles","Labs - Oak Textiles");

return;
}

if (x == "2") { 
document.ticket.bldg.options[0]=new Option("Select building","");
document.ticket.bldg.options[1]=new Option("Communications","SF- Communications");
document.ticket.bldg.options[2]=new Option("Hooper I","SF- Hooper I");
document.ticket.bldg.options[3]=new Option("Hooper II","SF- Hooper II");
document.ticket.bldg.options[4]=new Option("Hooper III","SF- Hooper III");
document.ticket.bldg.options[5]=new Option("Kansas 350","SF- Kansas 350");
document.ticket.bldg.options[6]=new Option("Kansas 360","SF- Kansas 360");
document.ticket.bldg.options[7]=new Option("Main Building","SF- Main Building");
document.ticket.bldg.options[8]=new Option("Orientations (DeHaro)","SF- Orientations (DeHaro)");
document.ticket.bldg.options[9]=new Option("Student Center (80 Carolina)","SF- Student Center (80 Carolina)");

document.ticket.lab.options[0]=new Option("Select lab","");
document.ticket.lab.options[1]=new Option("Grad Center","Labs - SF Grad Center");
document.ticket.lab.options[2]=new Option("Grad Design","Labs - SF Grad Design");
document.ticket.lab.options[3]=new Option("Grad Writing","Labs - SF Grad Writing");
document.ticket.lab.options[4]=new Option("Lab A","Labs - SF Lab A");
document.ticket.lab.options[5]=new Option("Lab B","Labs - SF Lab B");
document.ticket.lab.options[6]=new Option("Lab C","Labs - SF Lab C");
document.ticket.lab.options[7]=new Option("Lab D","Labs - SF Lab D");

return;
}
}

function deptSelect(x) {

document.ticket.dept.options.length = 0;
document.ticket.dept.style.display = "none";

if (x == "1") {
return;
}

if (x == "2") {
return;
}

if (x == "3") {
document.ticket.dept.style.display="";
document.ticket.dept.options[0]=new Option("Select department","");
document.ticket.dept.options[1]=new Option("Academic Affairs / Services","Academic Affairs / Services");
document.ticket.dept.options[2]=new Option("Advancement","Advancement");
document.ticket.dept.options[3]=new Option("Business Office","Business Office");
document.ticket.dept.options[4]=new Option("Center for Art in Public Life","Center for Art in Public Life");
document.ticket.dept.options[5]=new Option("Communications","Communications");
document.ticket.dept.options[6]=new Option("Educational Technology Services","Educational Technology");
document.ticket.dept.options[7]=new Option("Enrollment Services","Enrollment Services");
document.ticket.dept.options[8]=new Option("Extended Education","Extended Education");
document.ticket.dept.options[9]=new Option("Facilities","Facilities");
document.ticket.dept.options[10]=new Option("Financial Aid","Financial Aid");
document.ticket.dept.options[11]=new Option("First Year Office","First Year Office");
document.ticket.dept.options[12]=new Option("Graduate Offices","Graduate Offices");
document.ticket.dept.options[13]=new Option("Graduate Program Chairs","Graduate Program Chairs");
document.ticket.dept.options[14]=new Option("Human Resources","Human Resources");
document.ticket.dept.options[15]=new Option("Humanities & Sciences","Humanities & Sciences");
document.ticket.dept.options[16]=new Option("Libraries","Libraries");
document.ticket.dept.options[17]=new Option("President's Office","President's Office");
document.ticket.dept.options[18]=new Option("Public Safety / Security","Public Safety / Security");
document.ticket.dept.options[19]=new Option("Purchasing","Purchasing");
document.ticket.dept.options[20]=new Option("Shipping & Receiving","Shipping & Receiving");
document.ticket.dept.options[21]=new Option("Student Affairs","Student Affairs");
document.ticket.dept.options[22]=new Option("Student Records","Student Records");
document.ticket.dept.options[23]=new Option("Studio Managers","Studio Managers");
document.ticket.dept.options[24]=new Option("Studio Program Chairs","Studio Program Chairs");
document.ticket.dept.options[25]=new Option("Wattis Institute","WATTIS Institute");
document.ticket.dept.options[26]=new Option("Other Department (note in comments)","Other Department (note in comments)");
return;
}

if (x == "4") {
return;
}
}

function labDisplay(x) {

document.ticket.lab.style.display = "none";

if (x == "1") {
document.ticket.lab.style.display="";
return;
}

if (x == "2") {
return;
}
}








