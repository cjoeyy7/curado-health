<?php
error_reporting(0);
session_start();
include('unset.php');
include('connection.php');



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Results</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	
  </head>
  <body style="background-image: url(img/diamonds.png)">
  	<!-- body code goes here -->

<div class="container-fluid">
	<?php include('header.php')?>
	<div class="card">
		
		<div class="card-body" style="background-color: transparent; background-image: url(img/diamonds.png); border-style: none">
			<div class="card-header text-center text-white bg-warning"><h4>Here are your results!</h4></div><br>
	  	  <?php
	
	
				
	
						$_SESSION['TABLE'];
						$table = $_SESSION['TABLE'];
							function diabetes()
							{
								echo "<div class='alert alert-success' > <strong> early stage  of <i><strong>Diabetes</strong></i>  
								<h4>1). Cut Sugar and Refined Carbs From Your Diet</h4>
								<p>	Eating sugary foods and refined carbs can put at-risk individuals on the fast track to developing diabetes.

								Your body rapidly breaks these foods down into small sugar molecules, which are absorbed into your bloodstream.

								The resulting rise in blood sugar stimulates your pancreas to produce insulin, a hormone that helps sugar get out of the bloodstream and into your body's cells. </p>
								<br>
								<h4>2). Work Out Regularly </h4>
								<p>Performing physical activity on a regular basis may help prevent diabetes.

								Exercise increases the insulin sensitivity of your cells. So when you exercise, less insulin is required to keep your blood sugar levels under control.</p>
								<br>
								
								<h4>3). Drink Water as Your Primary Beverage </h4> 
								<p> water most of the time helps you avoid beverages that are high in sugar, preservatives and other questionable ingredients.</p>
								
								<br>
								
								<h4>4). Quit Smoking </h4>
								<p>Smoking has been shown to cause or contribute to many serious health conditions, including heart disease, emphysema and cancers of the lung, breast, prostate and digestive tract</p>
								
								<h4>5). Follow a Very-Low-Carb Diet </h4>
								<p> Following a ketogenic or very-low-carb diet can help you avoid diabetes.

								Although there are a number of ways of eating that promote weight loss, very-low-carb diets have strong evidence behind them </p><br>
								
								
								<h4>6). Watch Portion Sizes </h4>
								
								<p>Whether or not you decide to follow a low-carb diet, it's important to avoid large portions of food to reduce the risk of diabetes, especially if you are overweight.

								Eating too much food at one time has been shown to cause higher blood sugar and insulin levels in people at risk of diabetes </p><br>
								
								<h4> 7). Eat a High-Fiber Diet </h4>
								<p> Getting plenty of fiber is beneficial for gut health and weight management. </p><br>
								
								<h4> 8). Optimize Vitamin D Levels </h4>
								<p> Vitamin D is important for blood sugar control.

								Indeed, studies have found that people who don't get enough vitamin D, or whose blood levels are too low, have a greater risk of diabetes </p>
										
								</strong></div>";
							}
			
			
							function Migraine_headaches()
							{
								echo "<div class='alert alert-success' > <strong> early stage of <i> <strong>Migraine headaches </strong> </i> 
								
							<h4>1).	Find a calm environment</h4>
								<p>At the first sign of a migraine, retreat from your usual activities if possible.</p>

								<p><h5>a) Turn off the lights.</h5> Migraines often increase sensitivity to light and sound. Relax in a dark, quiet room. Sleep if you can.</p>
								<p><h5>b) Try temperature therapy.</h5> Apply hot or cold compresses to your head or neck. Ice packs have a numbing effect, which may dull the sensation of pain. Hot packs and heating pads can relax tense muscles. Warm showers or baths may have a similar effect.</p>

								<p> <h5>c) Drink a caffeinated beverage.</h5> In small amounts, caffeine alone can relieve migraine pain in the early stages or enhance the pain-reducing effects of acetaminophen (Tylenol, others) and aspirin.

								Be careful, however. Drinking too much caffeine too often can lead to withdrawal headaches later on.</p>

								<br>

								<h4>2). Sleep well</h4>
								<p>Migraines may keep you from falling asleep or wake you up at night. Likewise, migraines are often triggered by a poor night's sleep.
								<br>
								Here are some tips to encourage sound sleep.</p>

								<p> <h5> a) Establish regular sleep hours.</h5> Wake up and go to bed at the same time every day — even on weekends. If you nap during the day, keep it short. Naps longer than 20 to 30 minutes may interfere with nighttime sleep.</p>
								<p> <h5> b) Unwind at the end of the day. </h5>Anything that helps you relax can promote better sleep: listen to soothing music, soak in a warm bath or read a favorite book.</p>

								<p> <h5> c) But watch what you eat and drink before bedtime.</h5> Intense exercise, heavy meals, caffeine, nicotine and alcohol can interfere with sleep.</p>

								<p> <h5> d) Minimize distractions.</h5> Save your bedroom for sleep and intimacy. Don't watch television or take work materials to bed. Close your bedroom door. Use a fan to muffle distracting noises.</p>

								<p> <h5> Don't try to sleep. </h5>The harder you try to sleep, the more awake you'll feel. If you can't fall asleep, read or do another quiet activity until you become drowsy.</p>

								<p> <h5> e) Check your medications. </h5>Medications that contain caffeine or other stimulants — including some medications to treat migraines — may interfere with sleep.</p>
								<br>
								<h4> 3). Eat wisely </h4>
								<p>Your eating habits can influence your migraines. Consider the basics:</p>

								<p> <h5> a) Be consistent.</h5> Eat at about the same time every day.</p>

								<p> <h5> b) Don't skip meals.</h5> Fasting increases the risk of migraines.</p>

								<p> <h5> c) Keep a food journal.</h5> Keeping track of the foods you eat and when you experience migraines can help identify potential food triggers.</p>

								<p> <h5> d) Avoid foods that trigger migraines.</h5> If you suspect that a certain food — such as aged cheese, chocolate, caffeine or alcohol — is triggering your migraines, eliminate it from your diet to see what happens.</p>
								<br>
								<h4> 4). Exercise regularly </h4>
								<p>During physical activity, your body releases certain chemicals that block pain signals to your brain. These chemicals also help alleviate anxiety and depression, which can make migraines worse.</p>

								<p>Obesity also increases the risk of chronic headaches, so maintaining a healthy weight through exercise and diet can provide additional benefits in managing migraines.</p>

								<p>If your doctor agrees, choose any exercise you enjoy. Walking, swimming and cycling are often good choices. But it's important to start slowly. Exercising too vigorously can trigger migraines.</p>

								<br>

								<h4> 5). Manage stress</h4>
								<p>Stress and migraines often go hand in hand. You can't avoid daily stress, but you can keep it under control to help manage your migraines:</p>

								<p> <h5> a) Simplify your life. </h5> Rather than looking for ways to squeeze more activities or chores into the day, find a way to leave some things out.</p>

								<p> <h5> b) Manage your time wisely.</h5> Update your to-do list every day — both at work and at home. Delegate what you can, and divide large projects into manageable chunks.</p>

								<p> <h5> c) Take a break.</h5> If you feel overwhelmed, a few slow stretches or a quick walk may renew your energy for the task at hand.</p>

								<p> <h5> d) Adjust your attitude.</h5> Stay positive. If you find yourself thinking, This can't be done,  switch gears. Think instead, This will be tough. But I can make it work.</p>

								<p> <h5> e) Enjoy yourself. </h5>Find time to do something you enjoy for at least 15 minutes every day. It could be playing a game, having coffee with a friend or pursuing a hobby. Doing something you enjoy is a natural way to combat stress.</p>

								<p> <h5> f) Relax.</h5> Deep breathing from your diaphragm can help you relax. Focus on inhaling and exhaling slowly and deeply for at least 10 minutes every day. It may also help to consciously relax your muscles, one group at a time. When you're done, sit quietly for a minute or two.</p>
								<br>

								<h4> 6). Keep a migraine diary</h4>
								A diary may help you determine what triggers your migraines. Note when your migraines start, what you were doing at the time, how long they last and what, if anything, provides relief.

								Until recently, avoiding migraine triggers was considered the best advice. But new research suggests this may actually increase sensitivity to potential triggers.

								A more useful approach may be to learn to cope with these headache triggers by using behavioral management techniques, such as identifying and challenging negative thoughts, relaxation training and stress reduction.

								Strive for balance
								Living with migraines is a daily challenge. But making healthy lifestyle choices can help. Ask your friends and loved ones for support.

								If you're feeling anxious or depressed, consider joining a support group or seeking counseling. Believe in your ability to take control of the pain.


								
								
								</strong></div>";
							}
	  
	  				function Arthritis()
							{
								echo "<div class='alert alert-success' > <strong> early stage  of <i><strong>Arthritis</strong></i>  
								<h4>1).  Lose weight</h4>
								<p>	Your weight can make a big impact on the amount of pain you experience from arthritis. Extra weight puts more pressure on your joints — especially your knees, hips, and feet.

								Reducing the stress on your joints by losing weight will improve your mobility, decrease pain, and prevent future damage to your joints. </p>
								<br>
								
								<h4>2). Get more exercise </h4>
								<p>There are more benefits to exercise than just weight loss. Regular movement helps to maintain flexibility in your joints. Weight-bearing exercises such as running and walking can be damaging. Instead, try low-impact exercises such as water aerobics or swimming to flex your joints without adding further stress.</p>
								<br>
								
								<h4>3). Use hot and cold therapy </h4> 
								<p>Simple hot and cold treatments can make a world of difference when it comes to arthritis pain. Long, warm showers or baths — especially in the morning — help ease stiffness in your joints. Use an electric blanket or moist heating pad at night to keep your joints loose.

								Cold treatments are best for relieving joint pain, swelling, and inflammation. Wrap a gel ice pack or a bag of frozen vegetables in a towel and apply it to painful joints for quick relief.</p>
								
								<br>
								
								<h4>4). Use meditation to cope with pain </h4>
								<p>Meditation and relaxation techniques may be able to help you reduce pain from arthritis by reducing stress and enabling you to cope with it better.</p>
								
								<h4>5). Include the right fatty acids in your diet </h4>
								<p> Everyone needs omega-3 fatty acids in their diet for optimum health. These fats also help your arthritis. Fish oil supplements, which are high in omega-3s, have been shown to reduce joint stiffness and pain.

								Another fatty acid that can help is gamma-linolenic acid, or GLA. It’s found in the seeds of certain plants such as evening primrose, borage, hemp, and black currants. You can also buy the oils of the seeds as a supplement. However, be sure to check with your doctor before taking them. </p><br>
								
								
								<h4>6). Add turmeric to dishes </h4>
								
								<p>Turmeric, the yellow spice common in Indian dishes, contains a chemical called curcumin that may help to reduce arthritis pain </p><br>
								
								<h4> 7). Get a massage</h4>
								<p> According to the Arthritis Foundation, regular massaging of arthritic joints can help reduce pain and stiffness and improve your range of motion. Work with a physical therapist to learn self-massage, or schedule appointments with a massage therapist regularly. </p><br>
								
								<h4> 8). Consider herbal supplements </h4>
								<p>There are many kinds of herbal supplements on the market that claim to be able to reduce joint pain. Some of the herbs touted for arthritis pain include:
								boswellia
									bromelain<br>
									devil’s claw<br>
									ginkgo<br>
									stinging nettle<br>
									thunder god vine </p>
										
								</strong></div>";
							}
						 function stroke()
							{
								echo "<div class='alert alert-success' > <strong> early stage  of <i><strong>Stroke</strong></i>  
								<h4>1). Lower blood pressure</h4>
								<p>	High blood pressure is a huge factor, doubling or even quadrupling your stroke risk if it is not controlled. High blood pressure is the biggest contributor to the risk of stroke in both men and women, Monitoring blood pressure and, if it is elevated, treating it, is probably the biggest difference people can make to their vascular health.
								<br>
								<h6>Your ideal goal:<br> Maintain a blood pressure of less than 135/85. But for some, a less aggressive goal (such as 140/90) may be more appropriate.</6>
								<br><br>
								<strong>How to achieve it:</strong>

								Reduce the salt in your diet to no more than 1,500 milligrams a day (about a half teaspoon).<br>
								a) Avoid high-cholesterol foods, such as burgers, cheese, and ice cream.<br>
								b) Eat 4 to 5 cups of fruits and vegetables every day, one serving of fish two to three times a week, and several daily servings of whole grains and low-fat dairy.<br>
								c) Get more exercise — at least 30 minutes of activity a day, and more, if possible.<br>
								d) Quit smoking, if you smoke.<br>
								e) If needed, take blood pressure medicines.
								</p>
								<br>
								
								<h4>2). Lose weight </h4>
								<p>Obesity, as well as the complications linked to it (including high blood pressure and diabetes), raises your odds of having a stroke. If you're overweight, losing as little as 10 pounds can have a real impact on your stroke risk.
								<br><br>
								Your goal:<br> While an ideal body mass index (BMI) is 25 or less, that may not be realistic for you. Work with your doctor to create a personal weight loss strategy.
								<br><br>
								<strong>How to achieve it:</strong><br>

								a) Try to eat no more than 1,500 to 2,000 calories a day (depending on your activity level and your current BMI).<br>
								b) Increase the amount of exercise you do with activities like walking, golfing, or playing tennis, and by making activity part of every single day.</p>
								<br>
								
								<h4>3).Exercise more</h4> 
								<p>Exercise contributes to losing weight and lowering blood pressure, but it also stands on its own as an independent stroke reducer.</p>
								
								<br>
								
								<h4>4). If you drink — do it in moderation </h4>
								<p>Drinking a little alcohol may decrease your risk of stroke.if you take about one drink per day, your risk may be lower. Once you start drinking more than two drinks per day, your risk goes up very sharply.</p>
								
								<h4>5). Treat diabetes </h4>
								<p> Having high blood sugar damages blood vessels over time, making clots more likely to form inside them.</p><br>
								
								
								<h4>6). Quit smoking </h4>
								
								<p>Smoking accelerates clot formation in a couple of different ways. It thickens your blood, and it increases the amount of plaque buildup in the arteries. Along with a healthy diet and regular exercise, smoking cessation is one of the most powerful lifestyle changes that will help you reduce your stroke risk significantly.</p><br>
								
								
										
								</strong></div>";
							}
	  
	  
	  
	  			 			 function Bladder_cancer()
							{
								echo "<div class='alert alert-success' > <strong> early stage  of <i><strong>Bladder Cancer</strong></i>  
								<h4>1). Don’t smoke</h4>
								<p>	This means that cancer-causing chemicals contained in smoke won’t have a chance to collect in your bladder. If you currently smoke, do what you can to stop. Talk to your doctor about smoking cessation programs and support.</p>
								<br>
								
							
								
								<h4>2).Take care with chemicals </h4>
								<p> If you work with or around chemicals, follow all safety rules to avoid exposure.</p>
								<br>
								
								<h4>3).Drink water, stay properly hydrated</h4> 
								<p>Drinking water may dilute harmful substances in your urine and flush them out of your bladder faster</p>
								
								<br>
								
								<h4>4). Eat a well-balanced diet </h4>
								<p>Eat a diverse variety of fruits and vegetables, nuts and fish rich in omega-3 fatty acids, as well as lean protein; reduce fat and red meat.</p>
								
								
										
								</strong></div>";
							} 	
	  
	  
	  						 function Breast_cancer()
							{
								echo "<div class='alert alert-success' > <strong> early stage  of <i><strong>Breast Cancer</strong></i>  
								<h4>1). Keep Weight in Check</h4>
								<p>	It’s easy to tune out because it gets said so often, but maintaining a healthy weight is an important goal for everyone. Being overweight can increase the risk of many different cancers, including breast cancer, especially after menopause.
								</p>
								<br>
								
								<h4>2). Be Physically Active</h4>
								<p>Exercise is as close to a silver bullet for good health as there is, and women who are physically active for at least 30 minutes a day have a lower risk of breast cancer. Regular exercise is also one of the best ways to help keep weight in check.</p>
								
								<br>
								
								<h4>4). Eat Your Fruits & Vegetables – and Avoid Too Much Alcohol</h4>
								<p>A healthy diet can help lower the risk of breast cancer.  Try to eat a lot of fruits and vegetables and keep alcohol at moderate levels or lower (a drink a day or under).  While moderate drinking can be good for the heart in older adults, even low levels of intake can increase the risk of breast cancer.  If you don’t drink, don’t feel you need to start. If you drink moderately, there’s likely no reason to stop. But, if you drink more, you should cut down or quit.</p>
								
								<h4>5). Don’t Smoke </h4>
								<p> Smokers and non-smokers alike know how unhealthy smoking is.  On top of lowering quality of life and increasing the risk of heart disease, stroke, and at least 15 cancers – including breast cancer – it also causes smelly breath, bad teeth, and wrinkles. Now that’s motivation to stay smoke-free or work to get smoke-free..</p><br>
								
								
								<h4>6). Breastfeed, If Possible </h4>
								
								<p>Breastfeeding for a total of one year or more (combined for all children) lowers the risk of breast cancer. It also has great health benefits for the child.</p><br>
								
								<h4>7).  Avoid Birth Control Pills, Particularly After Age 35 or If You Smoke</h4>
								
								<p>Birth control pills have both risks and benefits. The younger a woman is, the lower the risks are. While women are taking birth control pills, they have a slightly increased risk of breast cancer. This risk goes away quickly, though, after stopping the pill. The risk of stroke and heart attack is also increased while on the pill – particularly if a woman smokes. However, long-term use can also have important benefits, like lowering the risk of ovarian cancer, colon cancer and uterine cancer – not to mention unwanted pregnancy – so there’s also a lot in its favor. If you’re very concerned about breast cancer, avoiding birth control pills is one option to lower risk.</p><br>
								
								<h4>8). Avoid Post-Menopausal Hormones</h4>
								
								<p>Post-menopausal hormones shouldn’t be taken long term to prevent chronic diseases, like osteoporosis and heart disease. Studies show they have a mixed effect on health, increasing the risk of some diseases and lowering the risk of others, and both estrogenonly hormones and estrogen-plus-progestin hormones increase the risk of breast cancer. If women do take post-menopausal hormones, it should be for the shortest time possible. The best person to talk to about the risks and benefits of post-menopausal hormones is your doctor.</p><br>
										
								</strong></div>";
							}
	  
	  						 function Cervical_cancer()
							{
								echo "<div class='alert alert-success' > <strong> early stage  of <i><strong>Cervical Cancer</strong></i>  
								<h4>1). Limit Sexual Partners</h4>
								
								
						
								<h4>2).Get an HPV vaccine </h4>
								
								<br>
								
								<h4>3).Get screening tests, including the Pap test and HPV test</h4> 
								
								<br>
								
								<h4>4). Do not smoke</h4>
								
								
										
								</strong></div>";
							} 
	  
	  					function Colon_cancer()
							{
								echo "<div class='alert alert-success' > <strong> early stage  of <i><strong>Colon Cancer</strong></i>  
								<h4>1). Maintain a Healthy Weight</h4>
								
								<br>
								
								<h4>2). Don’t Smoke</h4>
							
								
								<br>
								
								<h4>4). Be Physically Active</h4>
								<p>It’s hard to beat regular activity. It lowers the risk of many serious diseases, including colon cancer, and provides a good mental boost.</p>
								
								<h4>5). Limit Red Meat, Especially Processed Meat</h4>
								
								
								
								<h4>6). Get Enough Calcium and Vitamin D </h4>
								
								<p>getting enough calcium and vitamin D can help protect against colon cancer. Shoot for 1,000 to 1,200 milligrams per day of calcium and about 1,000 international units (IU) per day of vitamin D.</p><br>
								
								
								</strong></div>";
							}
	  
	  
	  						function heart_disease()
							{
								echo "<div class='alert alert-success' > <strong> early stage  of <i><strong>Heart diseases</strong></i>  
								<h4>1). Quit smoking</h4>
								
								<br>
								
								<h4>2). Improve cholesterol levels</h4>
								
								
								<br>
								
								<h4>4). Control high blood pressure</h4>
								
								
								<h4>5). Get active </h4>
								<br>
								
								
								<h4>6). Follow a heart-healthy diet </h4>
								
								<br>
								
								<h4>7).  Control diabetes</h4>
								
								<br>
								
								<h4>8).  Manage stress and anger</h4>
								
								<br>
										
								</strong></div> ";
							}
	  
	  						 function Lung_cancer()
							{
								echo "<div class='alert alert-success' > <strong> early stage  of <i><strong>Lung Cancer</strong></i>  
								<h4>1). Try to relax</h4>
								<p>	Feeling short of breath can be scary. But fear and anxiety only make it harder to breathe. When you begin to feel short of breath, try to manage the fear by choosing an activity that helps you relax. Listen to music, imagine your favorite vacation spot, meditate or say a prayer.
								</p>
								<br>
								
								<h4>2). Find a comfortable position</h4>
								<p>t may help to lean forward when you feel short of breath.</p>
								
								<br>
								
								<h4>4). Focus on your breath</h4>
								<p>When you feel short of breath, focus your mind on your breathing. Instead of trying to fill your lungs with air, concentrate on moving the muscles that control your diaphragm. Try breathing through pursed lips and pacing your breaths with your activity.</p>
								
								<h4>5).Save your energy for what's important. </h4>
								<p> If you're short of breath, you may become tired easily. Cut out the nonessential tasks from your day so that you can save your energy for what needs to be done.</p><br>
								
								
								</strong></div>";
							}
	  
	  						function Prostate_cancer()
							{
								echo "<div class='alert alert-success' > <strong> early stage  of <i><strong>Prostate Cancer</strong></i>  
								<h4>1). Choose a healthy diet</h4>
								
								<br>
								
								<h4>2). Maintain a healthy weight</h4>
								
								
								<br>
								
								<h4>4). Exercise most days of the week</h4>
								
								
								<h4>5).Stress reduction </h4>
								<br>
								
								
								</strong></div>";
							}
	  
	  				
	  
						// $total = 4;
						 $values = $db->query('SELECT SUM(value)  FROM '.$table.'');
						 
	  				
						// $sum = 4;
						 $na = mysqli_fetch_array($values);
	  					$_SESSION['chance']= $na['SUM(value)'] * 10;
	  					
	  
						 if($na['SUM(value)']>=0 && $na['SUM(value)']<=3)
						 {
							$onward= $na['SUM(value)']  *10  ;
							 echo "<div class='alert alert-success text-center' > <strong><h3> Your results is $onward %  </h3><strong></div>";
							 echo "<div class='alert alert-primary' > <strong>Your are not suffuring from lifestyle diseases visit nearest hospital or clinic for more clarification on your symptoms </strong></div>";
						 }
							  
	  						
	  
	  					elseif($na['SUM(value)']>=4 && $na['SUM(value)']<=6)
						{
						
							$chance = $na['SUM(value)']  *10  ;
							$disease = ucwords(str_replace("_", " ", $table));
							echo "<div class='alert alert-success' > <strong>You have  $chance% chances of $disease  </strong></div> ";
							echo "<br>";
							echo "<div class=' badge badge-white text-capitalize'><h5 class='text-primary'><strong>RECOMMENDATIONS</strong></h5> </div>";
								echo "<br>";
							
							//function 
							echo $table();
						}
						 
	  					
	  					elseif($na['SUM(value)']>=7)
						{
							$chance = $na['SUM(value)'] *10  ;
							echo "<div class='alert alert-danger text-center' > <strong><h3> Your results is $chance %  </h3><strong></div>";
							echo "<div class='alert alert-primary' > <strong>Critical stage of <i class='text-danger'>".strtoupper ( ucwords(str_replace("_", " ", $table))) ."</i>, use the links bellow to book appointment. <strong></div>";
						}
	 
	  					elseif(mysqli_affected_rows($db))
						{
								echo "<i class='text-danger>'invalid selection </i>";
						// echo $sum;
						}
						
						 echo "<br>";
					
	  			if( $na['SUM(value)']>=4)
					{
						echo "<div class=' badge badge-white'><h5 class='text-primary'><strong> DOCTORS </strong> <h5>  </div>";
					echo "<br>";
					
					$doclist = mysqli_query($db, " SELECT * FROM doctor WHERE speciality='$table'");
					
					
				
					?>
					
			
			
			
	
		 	
	 <table class="table table-striped ">
		
    <thead>
			
      <tr>
        <th>Name</th>
        <th>Lastname</th>
        <th>Speciality</th>
		   <th>Region</th>
		  <th>Book</th>
      </tr>
    </thead>
		
    <tbody>
	<?php 
					while($fetch = mysqli_fetch_array($doclist))
					{
					
					
					?> 
      <tr>
        <td><?php echo $fetch['name']; ?></td>
        <td><?php echo $fetch['surname']; ?></td>
        <td><?php echo ucwords(str_replace("_", " ", $fetch['speciality'])); ?></td>
		  <td><?php echo $fetch['region']; ?></td>
		  <td><a href="bookings.php?id=<?php echo $fetch['doc_id'] ?>" type="button" class="btn btn-success ">book</a></td>
      </tr>
     <?php
						}
					
						?>
    </tbody>
  </table>
					
			
			<?php
		
						
	  				}
						
						 
						 ?>
			</div>
		</div>
	</div>
	  
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.2.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.0.0.js"></script>
  </body>
</html>