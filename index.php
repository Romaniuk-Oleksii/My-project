<!DOCTYPE html>
<html lang="ua">
	<head>
		<meta charset="UTF-8">
	 <meta id="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>За'явка на відбір зразку</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway|Roboto" >
		<link rel="stylesheet" href="./css/normalize.css">
		<link rel="stylesheet" href="./css/style.css">
	</head>

	<body>
	
		<form >
			
				<label class="" for="date">
					<span class="left_part_of_lable">Дата, коли потрібно провести відбір</span>
					<input type="date" id="date" >
				</label>
					

				<label class="" for="Mandator_name">
					<span class="left_part_of_lable">Назва компанії замовника (платника)</span>
					<input type="text" id="Mandator_name"></span>
				</label>
					
				<label class="" for="Operator_name">
					<span class="left_part_of_lable">Назва компанії, де потрібно здійснити відбір</span>
					<input type="text" id="Operator_name">
				</label>
					

				<label class="" for="region">
					<span class="left_part_of_lable">Область</span>
					<select id="region">
						<option >Виберіть область</option>
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
					<input type="text" id="district">
				</label>
					

				<label class="" for="settlement">
					<span class="left_part_of_lable">Населений пункт</span>
					<input type="text" id="settlement">
					<span class="right_part_of_lable">м./с.</span>
				</label>
					
				<div class="line">
					<label class="" for="street">
						<span class="left_part_of_lable">Вулиця</span>
						<input type="text" id="street" class="left_input">
						<span class="right_part_of_lable">вул., будинок</span>
						<input type="nuber" id="buid_number" class="right_input">
					</label>						
				</div>

				<label class="" for="storeg_n">
					<span class="left_part_of_lable">Номер складу</span>
					<input type="number" id="storeg_n">
				</label>
					

				<label class="" for="product_name">
					<span class="left_part_of_lable">Назва продукції</span>
					<input type="text" id="product_name">
				</label>
					

				<label class="" for="amount">
					<span class="left_part_of_lable">Обсяг партії</span>
					<input type="number" id="amount">
					<span class="right_part_of_lable">кг.</span>
				</label>
					
					

				<label class="" for="lot_name">
					<span class="left_part_of_lable">Номер партії</span>
					<input type="text" id="lot_name">
				</label>
					

				<label class="" for="harvest_year">
					<span class="left_part_of_lable">Рік урожаю продукції</span>
					<input type="number" id="harvest_year" min="4" max="4">
				</label>
					

				<label class="" for="save_product">
					<span class="left_part_of_lable">Спосіб зберігання продукції</span>
					<select id="save_product">
						<option>Виберіть спосіб</option>
						<option value="big-begs">Біг-бег</option>
						<option value="in_bulk">Насипом</option>
						<option value="in_package">Упаковки</option>
						<option value="other">інше</option>
					</select>
				</label>

				<label class="" for="equipment">
					<span class="left_part_of_lable">Чи є в наявності обладнання для відбору</span>
					<select id="equipment">
						<option>Вкажіть яке</option>
						<option value="none">Немає</option>
						<option value="sampler_bag">Мішковий щуп</option>
						<option value="cylind_sampler">Циліндричний щуп</option>
					</select>
				</label>

				<div class="hide500" id="hide500">
					<p>Будь ласка, залучіть до відбору зовнішню сюрвеєрську компанію:</p>
					<label class="" for="sur_company">
						<span class="left_part_of_lable">Назва сюрвеєрської компанії</span>
						<select id="sur_company">
							<option>Виберіть компанію</option>
						</select>
					</label>
				</div>

				<label class="" for="laboratory_yes_no">
					<span class="left_part_of_lable">Чи плануєте самостійно надсилати зразок до лаболаторій</span>
					<select id="laboratory_yes_no">
						<option></option>
						<option value="yes">Так</option>
						<option value="no">Ні</option>
					</select>	
				</label>

				<div>
					<label class="" for="laboratory">
						<span class="left_part_of_lable">Вкажыть яку:</span>
						<select id="laboratory">
							<option></option>
						</select>
					</label>	
				</div>

				<label class="" for="type_of_analise">
					<span class="left_part_of_lable">Якщо треба проаналызувати зразок на додатковs показники то вкажыть які:</span>
					<input type="text" id="type_of_analise">
				</label>

				<p>Якщо необхыдно провести пломбування тари(складыв), заповныть, будь-ласка, <a href="#">заявку на надання сюрвеєрських послуг.</a></p>
				
				<label class="" for="contact_FIO">
					<span class="left_part_of_lable">Контактна особа, відповідальна за подання заявки ПІБ</span>
					<input type="text" id="contact_FIO">
				</label>
					

				<label class="" for="contact_phone">
					<span class="left_part_of_lable">Телефон</span>
					<input type="phone" id="contact_phone">
				</label>
					
				<label class="" for="contact_email">
				<span class="left_part_of_lable">e-mail адреса, на яку необхідно надіслати протокол лабораторних випробувань</span>
				<input type="email" id="contact_email">
				</label>
					
				<input type="checkbox" id="agree_pay" required> 	
					<label class="" for="agree_pay">Зобов'язуюсь ...</label>

				<input type="submit" id="">
				
			
		</form>
	
	</body>
</html>