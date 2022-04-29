<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NeuroStroke</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>

</head>
<body>
    
    <?php include 'navigation.php'; ?>
    
    <div id = "home_body" class = "container-fluid">
        <div id = "intro" class= "row"> 
            <video autoplay muted loop id="myVideo">
            <source src="videos/brainvideo.mp4" type="video/mp4">
            </video>
            <div class="content col-sm-12 ">
                <h1>Welcome to NeuroStroke Clinic!</h1>
                <p>We can stroke away your problems!</p>
            </div>
        </div>
        <div id = "mission" class="row">
            <h1>Mission</h1>
            <div id = "border"></div>
        </div>
        <div id = "mission_body" class = "row">    
            <div class="col col-sm-12 col-md-12 col-lg-6">
                <p>The NeuroStroke Clinic provides expert consultations and outpatient care to patients who are at risk of a stroke or have had a stroke due to conditions involving the vessels that supply blood to the brain. These conditions include carotid artery disease, aneurysms, arteriovenous malformations and other abnormalities of the brain's blood vessels.

                <p>Using advanced imaging technologies and drawing on the expertise of doctors from multiple specialties, our clinic provides evaluations, diagnoses, second opinions, hospitalization follow-up care, and treatment recommendations, which can range from lifestyle changes to endovascular procedures for unblocking arteries and repairing aneurysms. Our experience with a range of therapies – including traditional surgery, minimally invasive procedures, radiotherapy and medications – allows us to effectively manage even the most complex cases. We work closely with vascular surgeons, neurointerventional radiologists and other specialists to tailor treatment plans to each patient's condition.</p>
            </div>
            <div class="col col-sm-12 col-lg-6">
                    <img src="https://www.news-medical.net/image.axd?picture=2019%2F9%2Fshutterstock_325863197.jpg" alt="brain imaging">
            </div>

        </div>
        <div id = "team_heading">
            Our Team
            <div id = "border"></div>
        </div>
        
        <div id = "team" class="row">
                <div class="col col-12 col-md-4">
                    <img src="https://api.hub.jhu.edu/factory/sites/default/files/styles/hub_medium/public/ben_carson.jpg?itok=XJrWRhhY" alt="Ben Carson">
                    <h2>Ben Carson</h2>
                    <h3>Neurosurgeon</h3>
                    <p>Benjamin Solomon Carson Sr. is an American retired neurosurgeon and politician who served as the 17th United States Secretary of Housing and Urban Development from 2017 to 2021. He was a candidate for President of the United States in the 2016 Republican primaries.</p>
                </div>
                <div class="col col-12 col-md-4">
                    <img src="https://i.guim.co.uk/img/media/3f1aa91364e7d1faab1809a8c908d1864c077cdf/0_828_3624_2173/master/3624.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=6a3ccce5908bb90593bc9814573cacea" alt="Dr. Strange">
                    <h2>Dr. Strange</h2>
                    <h3>Neurologist</h3>
                    <p>Doctor Stephen Vincent Strange, M.D., Ph.D is the former Sorcerer Supreme and Master of the Mystic Arts. He is a brilliant neurosurgeon. Got his degree and Ph.D from Johns Hopkins University.</p>
                </div>
                <div class="col col-12 col-md-4">
                    <img src="https://variety.com/wp-content/uploads/2021/07/elon-musk-apple-app-store.jpg?w=681&h=383&crop=1" alt="Elon Musk">
                    <h2>Elon Musk</h2>
                    <h3>Chief Engineer</h3>
                    <p>Elon Reeve Musk FRS is an entrepreneur, investor, and business magnate. He is the founder, CEO, and Chief Engineer at SpaceX; early-stage investor, CEO, and Product Architect of Tesla, Inc.; founder of The Boring Company; and co-founder of Neuralink and OpenAI.</p>
                </div>
                
        </div>
    </div>
    <?php include 'footer.php'; ?>
    
</body>
</html>