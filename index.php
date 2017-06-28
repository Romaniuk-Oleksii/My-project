<!DOCTYPE html>
<html lang="ua">
	<head>
		<meta charset="UTF-8">
	 <meta id="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>За'явка на відбір зразку</title>
		<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway|Roboto" > -->
		<link rel="stylesheet" href="./css/normalize.css">
		<link rel="stylesheet" href="./css/style.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="./js/scripts.js"></script>
	
	</head>

	<body onload="load()">
		
		<form class="form" >
			
				<label class="" for="date">
					<span class="left_part_of_lable">Дата, коли потрібно провести відбір</span>
					<div class="right_part">
					<!-- <div class="select_for_day"> -->
						<select class="select_for_day" id="select_dd" >
							<option>ДД</option>
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>	
							<option value="11">11</option>	
							<option value="12">12</option>	
							<option value="13">13</option>	
							<option value="14">14</option>	
							<option value="15">15</option>	
							<option value="16">16</option>	
							<option value="17">17</option>	
							<option value="18">18</option>		
							<option value="19">19</option>
							<option value="20">20</option>	
							<option value="21">21</option>	
							<option value="22">22</option>	
							<option value="23">23</option>	
							<option value="24">24</option>	
							<option value="25">25</option>	
							<option value="26">26</option>	
							<option value="27">27</option>	
							<option value="28">28</option>		
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>	
						</select>
					<!-- </div> -->
					<!-- <div class="select_for_month"> -->
						<select class="select_for_month" id="select_mm">
							<option>ММ</option>
							<option value="01">Січень</option>
							<option value="02">Лютий</option>
							<option value="03">Березень</option>
							<option value="04">Квітень</option>
							<option value="05">Травень</option>
							<option value="06">Червень</option>
							<option value="07">Липень</option>
							<option value="08">Серпень</option>
							<option value="09">Вересень</option>
							<option value="10">Жовтень</option>
							<option value="11">Листопад</option>
							<option value="12">Грудень</option>	
						</select>	
					<!-- </div> -->
					<!-- <div class="select_for_year"> -->
						<select class="select_for_year" id="select_yyyy">
							<option>РРРР</option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
						</select>
					<!-- </div> -->
					</div>
					<!-- <input class="right_part input_type_text" type="date" value="" id="date" max="1979-12-31" min="2000-01-02" > -->
				</label>
					

				<label class="" for="Mandator_name">
					<span class="left_part_of_lable">Назва компанії замовника (платника)</span>
					<input class="right_part input_type_text" type="text" id="Mandator_name"></span>
				</label>
					
				<label class="" for="Operator_name">
					<span class="left_part_of_lable">Назва компанії, де потрібно здійснити відбір</span>
					<input class="right_part input_type_text" type="text" id="Operator_name">
				</label>
				
			
			

				<div class="container">
				<div class="inputs"  id="repit_div">
        <hr>
					<label  for="region">
						<span class="left_part_of_lable">Область</span>
						<select class="right_part" id="region" name="name_of_region" >
							<option disabled selected value hidden> -- select an option -- </option>
							<option value="Odesa">Одеська</option>
							<option value="Dnipro">Дніпровська</option>
							<option value="Chernihiv">Чернігівська</option>
							<option value="Kharkiv">Харківська</option>
							<option value="Zhytomyr">Житомирська</option>
							<option value="Poltava">Полтавська</option>
							<option value="Kherson">Херсонська</option>
							<option value="Kyiv">Київська</option>
							<option value="Zaporizhia">Запорізька</option>
							<option value="Luhansk">Луганська</option>
							<option value="Donetsk">Донецька</option>
							<option value="Vinnytsia">Вінницька</option>
							<option value="Autonomous Republic of Crimea">Автономна Республіка Крим </option> 
							<option value="Mykolaiv">Миколаївська</option>
							<option value="Kropyvnytskyi">Кропивницька</option>
							<option value="Sumy">Сумська</option>
							<option value="Lviv">Львівська</option>
							<option value="Cherkasy">Черкаська</option>
							<option value="Kmelnytskyi">Хмельницька</option>
							<option value="Volyn">Волинська</option>
							<option value="Rivne">Рівненська</option>
							<option value="Ivano-Frankivsk">Івано-Франківська</option>
							<option value="Ternopil">Тернопільська</option>
							<option value="Zakarpattia">Закарпатська</option>
							<option value="Chernivtsi">Чернівецька</option>
						</select>
					</label>

					<label class="" for="district">
						<span class="left_part_of_lable">Район</span>
						<input class="right_part input_type_text" type="text" name="district" id="district" name="name_of_district">
					</label>
						

					<label class="" for="settlement">
						<span class="left_part_of_lable">Населений пункт</span>
						<input class="right_part input_type_text" type="text" id="settlement" name="name_of_settlement">
						<span class="right_part_of_lable">м./с.</span>
					</label>
						
					<div class="line">
						<label class="" for="street">
							<span class="left_part_of_lable">Вулиця</span>
							<span class="right_part left_span">вул.</span>
							<input class="left_input input_type_text" type="text" id="street" name="name_of_street">
							<span class="right_span">, буд. №</span>
							<input class="right_input input_type_text" type="nuber" id="buid_number" name="number_of_build">
						</label>						
					</div>

					<label class="" for="storeg_n">
						<span class="left_part_of_lable">Номер складу</span>
						<input class="right_part input_type_text" type="number" id="storeg_n" name="storeg_number" name="number_of_storeg">
					</label>
						

					<label class="" for="product_name">
						<span class="left_part_of_lable">Назва продукції</span>
						<input class="right_part input_type_text" type="text" id="product_name_id" name="name_of_product">
					</label>
						

					<label class="" for="lot_amount">
						<span class="left_part_of_lable">Обсяг партії</span>
						<input class="right_part input_type_text" type="number" id="hide500" name="lot_amount" value="0" onchange="check_uncheck('hide500')">
						<span class="right_part_of_lable">кг.</span>
					</label>
						
						

					<label class="" for="lot_name">
						<span class="left_part_of_lable">Номер партії</span>
						<input class="right_part input_type_text" type="text" id="lot_id" name="lot_name">
					</label>
						

					<label class="" for="harvest_year">
						<span class="left_part_of_lable">Рік урожаю продукції</span>
						<input class="right_part input_type_text" type="number" id="harvest_year" min="4" max="4" name="year_of_harvest">
					</label>
						

					<label class="" for="save_product">
						<span class="left_part_of_lable">Спосіб зберігання продукції</span>
						<select class="right_part" id="save_product" name="save_product">
							<option disabled selected value hidden> -- select an option -- </option>
							<option value="big-begs">Біг-бег</option>
							<option value="in_bulk">Насипом</option>
							<option value="in_package">Упаковки</option>
							<option value="other">інше</option>
						</select>
					</label>
				
				<input formnovalidate class="bb btnRm"  id="" name="repit_div" type="image" src="plus.png" >

					</div>
					<div class="inputsBefore"></div>
					
			</div>
			<hr>

<input formnovalidate id="btn" name="trololo" type="image" src="plus.png" >
			
			

					<label class="" for="equipment">
						<span class="left_part_of_lable">Чи є в наявності обладнання для відбору</span>
						<select class="right_part" id="equipment" name="equipment"">
							<option disabled selected value hidden> -- select an option -- </option>
							<option value="none">Немає</option>
							<option value="sampler_bag">Мішковий щуп</option>
							<option value="cylind_sampler">Циліндричний щуп</option>
						</select>
					</label>
				
				<label class="" for="for_who">
					<span class="left_part_of_lable">Зразки відбираються для здійснення лаболаторних випробувань?</span>
					<select class="right_part" id="for_who" name="lab_testing">
						<option disabled selected value hidden> -- select an option -- </option>
						<option value="yes">Так</option>
						<option value="no">Ні</option>
						
					</select>
				</label>
				<div class="hide500" id="lot_amount">
					<p>Будь ласка, замовте до відбору зовнішню сюрвеєрську компанію:</p>
					<label class="" for="sur_company">
						<span class="left_part_of_lable">Назва сюрвеєрської компанії</span>
						<select class="right_part" id="sur_company" name="sur_company_list">
							<option disabled selected value hidden> -- select an option -- </option>					
							<option value="Agro-Maas">Agro-Maas</otpion>
							<option value="Amiranda">Amiranda</otpion></otpion>
							<option value="SGS">SGS</otpion>
							<option value="Commodity Control Services">Commodity Control Services</otpion>
							<option value="Inspectorate">Inspectorate</otpion>
							<option value="Baltic Control">Baltic Control</otpion>
							<option value="Ecotec Black Sea">Ecotec Black Sea</otpion>
						</select>
					</label>
				</div>
				<label class="" for="laboratory_yes_no">
					<span class="left_part_of_lable">Чи плануєте самостійно надсилати зразок до лаболаторій</span>
					<select class="right_part" id="laboratory_yes_no" name="labolatory" onchange="check_uncheck('laboratory_yes_no')">
						<option disabled selected value hidden> -- select an option -- </option>
						<option value="yes">Так</option>
						<option value="no">Ні</option>
					</select>	
				</label>
				<div id="labolatory">
					<label class="" for="laboratory">
						<span class="left_part_of_lable">Вкажіть яку:</span>
						<select class="right_part" id="laboratory" value="1" name="laboratory_list">
							<option disabled selected value hidden> -- select an option -- </option>
							<option value="Eurofins | Dr. Specht Laboratorien" >Eurofins | Dr. Specht Laboratorien</option>
							<option value="Eurofins Sofia GmbH" >Eurofins Sofia GmbH</option>
							<option value="Eurofins Polska Sp. z oo" >Eurofins Polska Sp. z oo</option>
							<option value="PLANTON GmbH" >PLANTON GmbH</option>
							<option value="GALAB Laboratories GmbH" >GALAB Laboratories GmbH</option>
							<option value="Bilacon GmbH" >Bilacon GmbH</option>
							<option value="Food GmbH Analytik & Consulting" >Food GmbH Analytik & Consulting</option>
							<option value="KWALIS Qualitätsforschung Fulda GmbH" >KWALIS Qualitätsforschung Fulda GmbH</option>
							<option value="SGS Institut Fresenius GmbH" >SGS Institut Fresenius GmbH</option>
							<option value="AGROLAB Polska Sp. z.o.o." >AGROLAB Polska Sp. z.o.o.</option>
							<option value="TLR international laboratories" >TLR international laboratories</option>
							<option value="J.S. Hamilton Poland S.A." >J.S. Hamilton Poland S.A.</option>
						</select>
					</label>	
				</div>
				<label class="" for="type_of_analise">
					<span class="left_part_of_lable">Якщо треба проаналізувати зразок на додаткові показники то вкажіть які:</span>
					<input class="right_part input_type_text" type="text" id="type_of_analise">
				</label>
				
				<div>
					<label class="" for="">
						<span class="left_part_of_lable">Чи потрібно провести пломбування</span>
						<select class="right_part" id="sealing_yes_no" name="sealin_chose" onchange="check_uncheck('sealing_yes_no')">
							<option disabled selected value hidden> -- select an option -- </option>
							<option value="no">Ні</option>
							<option value="yes">Так</option>
						</select>
					</label>
					<div id="sealin_chose">		
						<label class="" for="">
							<span class="left_part_of_lable">Біг-бег</span>
							<input class="right_part input_type_text" type="number">
							<span class="right_part_of_lable">К-ть.</span>
						</label>
						<label class="" for="">
							<span class="left_part_of_lable">Склад</span>
							<input class="right_part input_type_text" type="number">
							<span class="right_part_of_lable">К-ть.</span>
						</label>
					</div>
					
					<label class="" for="">
						<span class="left_part_of_lable">Здійснити інспекцію відвантажуння:</span>
						<select class="right_part" name="some_name">
							<option disabled selected value hidden> -- select an option -- </option>
							<option value="yes">Так</option>
							<option value="no">Ні</option>
						</select>
					</label>
				</div>
				<label class="" for="contact_FIO">
					<span class="left_part_of_lable">Контактна особа, відповідальна за подання заявки ПІБ</span>
					<input class="right_part input_type_text" type="text" id="contact_FIO">
				</label>
				
					
				<label class="" for="contact_phone">
					<span class="left_part_of_lable">Телефон</span>
					<input class="right_part input_type_text" type="phone" id="contact_phone">
				</label>
					
				<label class="" for="contact_email">
				<span class="left_part_of_lable">e-mail адреса, на яку необхідно надіслати протокол лабораторних випробувань</span>
				<input class="right_part input_type_text" type="email" id="contact_email">
				</label>
				
			  	<div class="agree">
					<label class="" for="agree_pay"><input  type="checkbox" class="checkbox" id="agree_pay" required></label>
					<p>Заповненням заявки, <strong>зобов'язуюсь</strong> оплатити послуги з відбору зразків та/або сюрвеєрських послуг. Підтверджую, що маю дозвіл на здійснення від компанії, дк потрібно здійснити відбір.</p>
				</div>
				<div class="div_for_submit_button">
					<input class="submit_button" type="submit" id="" value="Подати заявку">
				</div>
				
			
		</form>
	
	</body>
</html>