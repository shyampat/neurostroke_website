<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treatments</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body id = "treatment_page">
    <?php include 'navigation.php'; ?>
    <div class = "container-fluid">
        <div id = "treatment_row1" class = "row">
            <div class = "col-md-6 treat_first">
                <h1>Diagnoses</h1>
                <br>
                <p>Strokes are usually diagnosed by doing physical tests and studying images of the brain produced during a scan.</p>
            </div>
            <div class = "col-md-6">
                <img id = "brain_images" src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdvm3-DoLPVihpDtl-HYk3WlebAObAZJyaZzMD9oKzK6gxL-nCD5yL-SLHlSKu3ZlHi9I&usqp=CAU" alt = "brain_images">
            </div>
        </div>
        <h1 id="at_homeh1">At Home Test</h1>
        <div class = "row justify-content-around first_types">
            <div class = "col-md-8 col-sm-12 type">
                <h1> F.A.S.T Warning Signs</h1>
                <p>Use the letters in F.A.S.T to spot a Stroke.</p>
                <ul>
                    <li><strong>F = Face Drooping</strong> – Does one side of the face droop or is it numb? Ask the person to smile. Is the person's smile uneven?</li>
                    <li><strong>A = Arm Weakness</strong> – Is one arm weak or numb? Ask the person to raise both arms. Does one arm drift downward?</li>
                    <li><strong>S = Speech Difficulty</strong> – Is speech slurred?</li>
                    <li><strong>T = Time to call 911</strong></li>
                </ul>
            </div>
        </div>
        <h1 id = "at_hospitalh1">At the Hospital Tests</h1>
        <div class = "row justify-content-around first_types">
            <div class = "col-md-5 col-sm-12 type">
                <h1> Physical Exam</h1>
                <p>Your doctor will do a number of tests you're familiar with, such as listening to the heart and checking the blood pressure. You'll also have a neurological exam to see how a potential stroke is affecting your nervous system.</p>
            </div>
            <div class = "col-md-5 col-sm-12 type">
                <h1> Blood Tests</h1>
                <p>You may have several blood tests, including tests to check how fast the blood clots, whether the blood sugar is too high or low, and whether you have an infection.</p>
            </div>
        </div>
        <div class = "row justify-content-around first_types">
            <div class = "col-md-5 col-sm-12 type">
                <h1> Computerized Tomography (CT) Scan</h1>
                <p>A CT scan uses a series of X-rays to create a detailed image of your brain. A CT scan can show bleeding in the brain, an ischemic stroke, a tumor or other conditions. Doctors may inject a dye into your bloodstream to view the blood vessels in the neck and brain in greater detail (computerized tomography angiography).</p>
            </div>
            <div class = "col-md-5 col-sm-12 type">
                <h1> Magnetic Resonance Imaging (MRI)</h1>
                <p>An MRI uses powerful radio waves and a magnetic field to create a detailed view of the brain. An MRI can detect brain tissue damaged by an ischemic stroke and brain hemorrhages. Your doctor may inject a dye into a blood vessel to view the arteries and veins and highlight blood flow (magnetic resonance angiography or magnetic resonance venography).</p>
            </div>
        </div>
        <div class = "row justify-content-around first_types">
            <div class = "col-md-5 col-sm-12 type">
                <h1> Carotid Ultrasound</h1>
                <p>In this test, sound waves create detailed images of the inside of the carotid arteries in the neck. This test shows buildup of fatty deposits (plaques) and blood flow in the carotid arteries.</p>
            </div>
            <div class = "col-md-5 col-sm-12 type">
                <h1>Cerebral Angiogram</h1>
                <p>In this uncommonly used test, your doctor inserts a thin, flexible tube (catheter) through a small incision, usually in the groin, and guides it through the major arteries and into the carotid or vertebral artery. Then your doctor injects a dye into the blood vessels to make them visible under X-ray imaging. This procedure gives a detailed view of arteries in the brain and neck.</p>
            </div>
        </div>
        <div class = "row justify-content-around first_types">
            <div class = "col-md-8 col-sm-12 type">
                <h1> Echocardiogram</h1>
                <p>An echocardiogram uses sound waves to create detailed images of the heart. An echocardiogram can find a source of clots in the heart that may have traveled from the heart to the brain and caused a stroke.</p>
            </div>
        </div>
        <div class = "row citation">
            <p>Information provided by  
            <a href="https://www.mayoclinic.org/diseases-conditions/stroke/diagnosis-treatment/drc-20350119"> Mayo Clinic</a></p>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>