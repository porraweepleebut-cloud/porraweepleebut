(function(){
const NAME='ปรวีร์ พลีบัตร',FN='ปรวีร์',LN='พลีบัตร',UNI='มหาวิทยาลัยเทคโนโลยีราชมงคลลำปาง';
const seq=(a,b)=>Array.from({length:b-a+1},(_,i)=>a+i);
const nf=(n,d=2)=>Number(n).toLocaleString('en-US',{minimumFractionDigits:d,maximumFractionDigits:d});
const lines=n=>seq(1,n).map(i=>i+'. '+NAME+'<br>').join('');
const sum=a=>a.reduce((x,y)=>x+y,0);
const NUM=[10,20,30,40,50];
const arrPre='<h3>โจทย์</h3><pre>array มักใช้ร่วมกับคำสั่งวนรอบ\n$number = [10, 20, 30, 40, 50];  =>  10+20+30+40+50 = 150</pre><hr>';
const arrRev=()=>NUM.slice().reverse().map(v=>'number['+NUM.indexOf(v)+'] => '+v+'<br>').join('')+'ผลรวม = 150';
const arrFwd=()=>NUM.map((v,i)=>'number['+i+'] => '+v+'<br>').join('')+'ผลรวม = 150';
const stu=(r)=>'รหัสนักศึกษา : unknow<br>ชื่อนักศึกษา : '+r[0]+'<br>อายุนักศึกษา : 20<br>';
const tbl=(h,rows)=>'<table><tr>'+h.map(x=>'<td>'+x+'</td>').join('')+'</tr>'+rows+'</table>';
const oddEven=(name,i)=>i%2?name:UNI;
const calcRows=(name)=>seq(1,100).map(i=>'<tr><td class="number">'+i+'</td><td>'+oddEven(name,i)+'</td></tr>').join('');
const sums=()=>tbl(['ลำดับ','ข้อมูล'],calcRows(NAME)+'<tr><td>ผลรวมเลขคู่</td><td class="number">2550</td></tr><tr><td>ผลรวมเลขคี่</td><td class="number">2500</td></tr><tr><td>ผลรวมทั้งหมด</td><td class="number">5050</td></tr>');
const fnHello=(x,y)=>'Hello Word! porrawee<br> '+x+' + '+y+' = '+(x+y)+'<hr>';
const O={
 l1_1:()=>'<h3>โจทย์</h3><p>แสดงลำดับ ชื่อนักศึกษา จำนวน 100 ครั้ง</p><hr><h3>1. For Loop</h3>'+lines(100)+'<hr><h3>2. While Loop</h3>'+lines(100)+'<hr><h3>3. Do While Loop</h3>'+lines(100),
 l2_1:()=>'<h3>โจทย์</h3><p>แสดงลำดับ ชื่อนักศึกษา จำนวน 100 ครั้ง</p><hr><h3>1. While Loop</h3>'+lines(100)+'<hr><h3>2. Do While Loop</h3>'+lines(100),
 l_2:()=>'<h3>2. ปรับปรุง ใช้ Tag : html Table and CSS</h3>'+tbl(['ลำดับ','ชื่อ','นามสกุล'],seq(1,100).map(i=>'<tr><td class="number">'+i+'</td><td>'+FN+'</td><td>'+LN+'</td></tr>').join('')),
 l_3:()=>'<h3>3. ถ้าเลขคี่ ให้แสดงชื่อนักศึกษา เลขคู่แสดง '+UNI+'</h3>'+tbl(['ลำดับ','ข้อมูล'],calcRows(FN)),
 l_4:()=>'<h3>4. หาผลรวมเลขคู่ เลขคี่ และทั้งหมด [หารเอาเศษด้วย 2]</h3>'+sums(),
 l_5:()=>'<h3>5. หาผลรวมและค่าเฉลี่ยเลขคู่ เลขคี่ และทั้งหมด [หารเอาเศษด้วย 2]</h3>'+sums().replace('</table>','<tr><td>ค่าเฉลี่ยเลขคู่</td><td class="number">2550/50 = 51.00</td></tr><tr><td>ค่าเฉลี่ยเลขคี่</td><td class="number">2500/50 = 50.00</td></tr><tr><td>ค่าเฉลี่ยทั้งหมด</td><td class="number">5050/100 = 50.50</td></tr></table>'),
 a_for:()=>arrPre+arrFwd(), a_each:()=>arrPre+arrFwd(),
 a_while:()=>arrPre+arrRev(), a_do:()=>arrPre+arrRev(),
 a_each2:()=>'<h3>โจทย์</h3><pre>กำหนด Array เป็น [10, 20, 30, 40, 50]\n\nผลรวม = 150\nค่าเฉลี่ย = 150 ÷ 5 = 30</pre><hr>'+NUM.map((v,i)=>'number['+i+'] => '+v+'<br>').join('')+'<br>ผลรวม = 150<br>ค่าเฉลี่ย = 150 ÷ 5 = 30<h3>ผู้เขียนโปรแกรม</h3>'+stu([FN])+'<hr>'+stu(['กิตติพิช,'])+'<hr>'+stu(['ยาณภัทร']),
 a_stats:()=>'<h3>โจทย์</h3><pre>Array $number = [10, 20, 30, 40, 50];\nหาผลรวม ค่าเฉลี่ย สูงสุด และต่ำสุด</pre><hr>ข้อมูลใน Array : 10 20 30 40 50<br><br>ผลรวม = 150<br>ค่าเฉลี่ย = 30<br>ค่าสูงสุด = 50<br>ค่าต่ำสุด = 10<br>',
 f1:()=>'<h3>การเขียนโปรแกรม</h3>'+seq(1,100).map(()=>fnHello(10,5)).join(''),
 f2:()=>'<h3>การเรียกใช้</h3>'+seq(1,50).map(i=>fnHello(i,i)).join(''),
 f3:()=>'<h3>การเรียกใช้งาน</h3>'+seq(1,50).map(i=>i+'. '+i+' + '+i+' = '+(2*i)+'<br>').join(''),
 f5:()=>'<h3>การเรียกใช้งาน</h3>sumMyNumbers(5, 2, 6, 2, 7, 7) = 29',
 f6:()=>'<h3>การเรียกใช้งาน</h3>ผลรวม = 150<br>ค่าเฉลี่ย = 30'
};
O.f4=O.f3;
const bmiText=b=>b<18.5?'ต่ำกว่าเกณฑ์':b<23?'ปกติสมส่วน':b<25?'น้ำหนักเกิน':b<30?'อ้วนระดับ 1':'อ้วนอันตราย';
const bmiEn=b=>b<18.5?'Underweight':b<23?'Normal':b<25?'Overweight':b<30?'Obese Level 1':'Obese Level 2';
const W=['weight','น้ำหนัก (กก.)','number','เช่น 60'],H=['height','ส่วนสูง (ซม.)','number','เช่น 170'];
const F={
 bmi:{btn:'คำนวณ BMI',fields:[W,H],calc:v=>{if(!(v.weight>0&&v.height>0))return{err:'กรุณากรอกตัวเลขที่มากกว่า 0'};const b=v.weight/Math.pow(v.height/100,2);return{rows:[['ค่า BMI',nf(b)],['แปลผล',bmiText(b)]]}}},
 bmi2:{btn:'คำนวณ',fields:[W,H],calc:v=>{if(!(v.weight>0&&v.height>0))return{err:'ข้อมูลไม่ถูกต้อง (Invalid data)'};const b=v.weight/Math.pow(v.height/100,2);return{rows:[['BMI',nf(b)],['ผลลัพธ์',bmiEn(b)]]}}},
 elec:{btn:'คำนวณค่าไฟ',fields:[['units','จำนวนหน่วยไฟที่ใช้','number','เช่น 250']],calc:v=>{const u=v.units;if(!(u>=0))return{err:'จำนวนหน่วยไม่ถูกต้อง'};const e=u<=100?u*2.5:u<=200?250+(u-100)*3:250+300+(u-200)*4;const bv=e+38,vat=bv*0.07;return{rows:[['ค่าไฟฟ้า',nf(e)+' บาท'],['ค่าบริการ','38.00 บาท'],['ภาษีมูลค่าเพิ่ม (7%)',nf(vat)+' บาท'],['รวมทั้งสิ้น',nf(bv+vat)+' บาท']]}}},
 grade:{btn:'คำนวณเกรด',fields:[['score','คะแนน (0 - 100)','number','เช่น 75']],calc:v=>{const s=v.score;if(!(s>=0&&s<=100))return{err:'คะแนนต้องอยู่ระหว่าง 0 - 100'};return{rows:[['คะแนน',s],['เกรด',s>=80?'A':s>=70?'B':s>=60?'C':s>=50?'D':'F']]}}},
 loan:{btn:'ประเมินสินเชื่อ',fields:[['age','อายุ (ปี)','number','เช่น 30'],['income','รายได้ต่อเดือน (บาท)','number','เช่น 25000'],['expense','รายจ่ายต่อเดือน (บาท)','number','เช่น 10000'],['loan','จำนวนเงินกู้ (บาท)','number','เช่น 100000'],['months','ระยะเวลาผ่อน (เดือน)','number','เช่น 24'],['late','เคยผิดนัดชำระหรือไม่','select',[['no','ไม่เคย'],['yes','เคย']]]],calc:v=>{if(v.months<=0)return{err:'ระยะเวลาผ่อนไม่ถูกต้อง'};const pay=v.loan/v.months,ok=v.age>=20&&v.age<=60&&v.income>=15000&&v.late==='no'&&(v.income-v.expense)>=2*pay&&v.loan<=20*v.income;return{cls:ok?'ok':'bad',rows:[['ผลการประเมิน',ok?'Loan Approved':'Loan Not Approved']]}}},
 fire:{btn:'คำนวณค่าไฟ',fields:[['unit','จำนวนหน่วยไฟที่ใช้','number','เช่น 150']],calc:v=>{const u=v.unit,r=u>=1&&u<=100?3.5:u>=101&&u<=300?4:u>300?4.5:0;return{rows:[['จำนวนหน่วยไฟ',u+' หน่วย'],['ราคาต่อหน่วย',r+' บาท'],['ค่าไฟที่ต้องชำระ',nf(u*r)+' บาท']]}}},
 bonus:{btn:'คำนวณโบนัส',fields:[['name','ชื่อพนักงาน','text','กรอกชื่อพนักงาน'],['salary','เงินเดือน (บาท)','number','เช่น 20000']],calc:v=>{const s=v.salary,r=s<=15000?10:s<=30000?8:5,b=s*r/100;return{rows:[['ชื่อพนักงาน',v.name],['เงินเดือน',nf(s)+' บาท'],['อัตราโบนัส',r+' %'],['จำนวนโบนัสที่ได้รับ',nf(b)+' บาท'],['รายได้รวม (เงินเดือน + โบนัส)',nf(s+b)+' บาท']]}}},
 discount:{btn:'คำนวณราคาสินค้า',fields:[['product_name','ชื่อสินค้า','text','กรอกชื่อสินค้า'],['amount','ยอดซื้อสินค้า (บาท)','number','กรอกราคา เช่น 1000']],calc:v=>{const a=v.amount,r=a<2000?0:a<=5000?5:10,d=a*r/100;return{rows:[['ชื่อสินค้า',v.product_name],['ยอดซื้อสินค้า',nf(a)+' บาท'],['อัตราส่วนลด',r+' %'],['จำนวนเงินส่วนลด',nf(d)+' บาท'],['จำนวนเงินที่ต้องชำระ',nf(a-d)+' บาท']]}}},
 car:{btn:'คำนวณค่าโดยสาร',fields:[['passenger_name','ชื่อผู้โดยสาร','text','กรอกชื่อผู้โดยสาร'],['distance','ระยะทาง (กิโลเมตร)','number','เช่น 12']],calc:v=>{const d=v.distance,f=d>=1&&d<=10?15:d>=11&&d<=20?25:d>20?35:0;return{rows:[['ชื่อผู้โดยสาร',v.passenger_name],['ระยะทาง',d+' กิโลเมตร'],['ค่าโดยสารที่ต้องชำระ',f+' บาท']]}}},
 bonuswork:{btn:'คำนวณโบนัส',fields:[['name','ชื่อพนักงาน','text','กรอกชื่อพนักงาน'],['salary','เงินเดือน (บาท)','number','เช่น 20000'],['years','อายุงาน (ปี)','number','เช่น 3']],calc:v=>{const y=v.years,r=y<2?5:y<=5?10:15,b=v.salary*r/100,t=b*0.03;return{rows:[['ชื่อพนักงาน',v.name],['เงินเดือน',nf(v.salary)+' บาท'],['อายุงาน',y+' ปี'],['อัตราโบนัส',r+' %'],['โบนัสที่ได้รับ',nf(b)+' บาท'],['ภาษีหัก ณ ที่จ่าย (3%)',nf(t)+' บาท'],['โบนัสสุทธิ',nf(b-t)+' บาท']]}}}
};
const esc=s=>String(s).replace(/[&<>"]/g,c=>({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;'}[c]));
window.page=function(key){
 const out=document.getElementById('out');
 if(O[key]){out.innerHTML=O[key]();return}
 const f=F[key];
 out.innerHTML='<form class="card" id="f">'+f.fields.map(x=>'<label for="'+x[0]+'">'+x[1]+'</label>'+(x[2]==='select'?'<select id="'+x[0]+'" name="'+x[0]+'">'+x[3].map(o=>'<option value="'+o[0]+'">'+o[1]+'</option>').join('')+'</select>':'<input id="'+x[0]+'" name="'+x[0]+'" type="'+x[2]+'" '+(x[2]==='number'?'step="any" ':'')+'placeholder="'+x[3]+'" required>')).join('')+'<button type="submit" class="btn">'+f.btn+'</button></form><div id="res"></div>';
 document.getElementById('f').addEventListener('submit',e=>{
  e.preventDefault();const v={};
  f.fields.forEach(x=>{const el=document.getElementById(x[0]);v[x[0]]=x[2]==='number'?parseFloat(el.value):el.value});
  const r=f.calc(v),res=document.getElementById('res');
  res.innerHTML=r.err?'<div class="result err">'+esc(r.err)+'</div>':'<div class="result '+(r.cls||'ok')+'"><h3>ผลลัพธ์</h3>'+r.rows.map(x=>'<div class="row"><span>'+x[0]+'</span><b>'+esc(x[1])+'</b></div>').join('')+'</div>';
 });
};
})();
