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
    <div id = "treatment_container" class = "container-fluid">
        <div id = "treatment_row1" class = "row">
            <div class = "col-md-6 treatment_first">
                <h1 id = "treatment_heading">Treatments</h1>
                <br>
                <p>Emergency treatment for stroke depends on whether you're having an ischemic stroke or a stroke that involves bleeding into the brain (hemorrhagic).</p>
            </div>
            <div class = "col-md-6">
                <img id = "treatment_img" src = "https://www.ucihealth.org//-/media/images/modules/blog/posts/2019/social-media/05/lifeafterstroke1200.jpg" alt = "treatment_img">
            </div>
        </div>
        <h1 id = "ischemic_treatment">Ischemic Stroke</h1>
        <p id = "ischemic_treat_info">To treat an ischemic stroke, doctors must quickly restore blood flow to the brain. This may be done with:</p>
        <div id = "ischem_row" class = "row justify-content-around first_types">
            <div id = "iv_meds" class = "col-md-8 col-sm-12 type">
                <h1> Emergency IV Medication</h1>
                <p>Therapy with drugs that can break up a clot has to be given within 4.5 hours from when symptoms first started if given intravenously. The sooner these drugs are given, the better. Quick treatment not only improves your chances of survival but also may reduce complications.</p>

                <p>An IV injection of recombinant tissue plasminogen activator (TPA) — also called alteplase (Activase) or tenecteplase (TNKase) — is the gold standard treatment for ischemic stroke. An injection of TPA is usually given through a vein in the arm within the first three hours. Sometimes, TPA can be given up to 4.5 hours after stroke symptoms started.</p>

                <p>This drug restores blood flow by dissolving the blood clot causing the stroke. By quickly removing the cause of the stroke, it may help people recover more fully from a stroke. Your doctor will consider certain risks, such as potential bleeding in the brain, to determine whether TPA is appropriate for you.</p>

                <img id = "tpa_img" src = "https://www.acepnow.com/wp-content/uploads/2020/07/ACEP_0720_pg1a.png" alt = "tpa_img">
            </div>
            <div class = "col-md-8 col-sm-12 type">
                <h1> Emergency Endovascular Procedures</h1>
                <p>Doctors sometimes treat ischemic strokes directly inside the blocked blood vessel. Endovascular therapy has been shown to significantly improve outcomes and reduce long-term disability after ischemic stroke. These procedures must be performed as soon as possible:</p>
                <div class = "container-fluid">
                    <div class = "row justify-content-around third_types">
                        <div class = "col-md-5 col-sm-12 type">
                            <h1> Medications delivered directly to the Brain</h1>
                            <p>Doctors insert a long, thin tube (catheter) through an artery in the groin and thread it to the brain to deliver TPA directly where the stroke is happening. The time window for this treatment is somewhat longer than for injected TPA but is still limited.</p>
                        </div>
                        <div class = "col-md-5 col-sm-12 type">
                            <h1> Removing the Clot with a Stent Retriever</h1>
                            <p>Doctors can use a device attached to a catheter to directly remove the clot from the blocked blood vessel in the brain. This procedure is particularly beneficial for people with large clots that can't be completely dissolved with TPA. This procedure is often performed in combination with injected TPA.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p id = "ischemic_treat_info">The time window when these procedures can be considered has been expanding due to newer imaging technology. Doctors may order perfusion imaging tests (done with CT or MRI) to help determine how likely it is that someone can benefit from endovascular therapy.</p>
        <h2>Other Procedures:</h2>
        <p id = "other_proc_info">To decrease your risk of having another stroke or transient ischemic attack, your doctor may recommend a procedure to open up an artery that's narrowed by plaque. Options vary depending on the situation, but include:</p>
        <div id = "ischem_row" class = "row justify-content-around first_types">
            <div id = "iv_meds" class = "col-md-5 col-sm-12 type">
                <h1> Carotid Endarterectomy</h1>
                <p>Carotid arteries are the blood vessels that run along each side of the neck, supplying the brain (carotid arteries) with blood. This surgery removes the plaque blocking a carotid artery and may reduce the risk of ischemic stroke. A carotid endarterectomy also involves risks, especially for people with heart disease or other medical conditions.</p>
            </div>
            <div id = "iv_meds" class = "col-md-5 col-sm-12 type">
                <h1> Angioplasty and Stents</h1>
                <p>In an angioplasty, a surgeon threads a catheter to the carotid arteries through an artery in the groin. A balloon is then inflated to expand the narrowed artery. Then a stent can be inserted to support the opened artery.</p>
            </div>
        </div>
        <h1 id = "ischemic_treatment">Hemorrhagic Stroke</h1>
        <p id = "ischemic_treat_info">Emergency treatment of hemorrhagic stroke focuses on controlling the bleeding and reducing pressure in the brain caused by the excess fluid. Treatment options include:</p>
        <div id = "ischem_row" class = "row justify-content-around first_types">
            <div id = "iv_meds" class = "col-md-5 col-sm-12 type">
                <h1> Emergency Measures</h1>
                <p>If you take blood-thinning medications to prevent blood clots, you may be given drugs or transfusions of blood products to counteract the blood thinners' effects. You may also be given drugs to lower the pressure in the brain (intracranial pressure), lower blood pressure, prevent spasms of the blood vessels and prevent seizures.</p>
            </div>
            <div class = "col-md-5 col-sm-12 type">
                <h1> Surgery</h1>
                <p>If the area of bleeding is large, your doctor may perform surgery to remove the blood and relieve pressure on the brain. Surgery may also be used to repair blood vessel problems associated with hemorrhagic strokes. Your doctor may recommend one of these procedures after a stroke or if an aneurysm, arteriovenous malformation (AVM) or other type of blood vessel problem caused the hemorrhagic stroke.</p>
            </div>
        </div>
        <div id = "ischem_row" class = "row justify-content-around first_types">
            <div id = "iv_meds" class = "col-md-5 col-sm-12 type">
                <h1> Surgical Clipping</h1>
                <p>A surgeon places a tiny clamp at the base of the aneurysm to stop blood flow to it. This clamp can keep the aneurysm from bursting, or it can keep an aneurysm that has recently hemorrhaged from bleeding again.</p>
            </div>
            <div class = "col-md-5 col-sm-12 type">
                <h1> Coiling (Endovascular Embolization)</h1>
                <p>Using a catheter inserted into an artery in the groin and guided to the brain, the surgeon will place tiny detachable coils into the aneurysm to fill it. This blocks blood flow into the aneurysm and causes blood to clot.</p>
            </div>
        </div>
        <div id = "ischem_row" class = "row justify-content-around first_types">
            <div id = "iv_meds" class = "col-md-5 col-sm-12 type">
                <h1> Surgical AVM Removal</h1>
                <p>Surgeons may remove a smaller AVM if it's located in an accessible area of the brain. This eliminates the risk of rupture and lowers the risk of hemorrhagic stroke. However, it's not always possible to remove an AVM if it's located deep within the brain, it's large, or its removal would cause too much of an impact on brain function.</p>
            </div>
            <div class = "col-md-5 col-sm-12 type">
                <h1> Stereotactic Radiosurgery</h1>
                <p>Using multiple beams of highly focused radiation, stereotactic radiosurgery is an advanced minimally invasive treatment used to repair blood vessel malformations.</p>
            </div>
        </div>
        <h1 id = "ischemic_treatment">Stroke Recovery and Rehabilitation</h1>
        <img class = "left" src = "https://www.mayoclinic.org/-/media/kcms/gbs/patient-consumer/images/2014/10/29/13/35/brain-hemispheres-with-walking-man-illustration-8col.jpg" alt = "recovery_rehab_img">
        <p class = "rehab_info">After emergency treatment, you'll be closely monitored for at least a day. After that, stroke care focuses on helping you recover as much function as possible and return to independent living. The impact of the stroke depends on the area of the brain involved and the amount of tissue damaged.</p>
        <p class = "rehab_info">If the stroke affected the right side of the brain, your movement and sensation on the left side of the body may be affected. If the stroke damaged the brain tissue on the left side of the brain, your movement and sensation on the right side of the body may be affected. Brain damage to the left side of the brain may cause speech and language disorders.</p>
        <p class = "rehab_info">Most stroke survivors go to a rehabilitation program. Your doctor will recommend the most rigorous therapy program you can handle based on your age, overall health and degree of disability from the stroke. Your doctor will take into consideration your lifestyle, interests and priorities, and the availability of family members or other caregivers.</p>
        <p class = "rehab_info">Rehabilitation may begin before you leave the hospital. After discharge, you might continue your program in a rehabilitation unit of the same hospital, another rehabilitation unit or skilled nursing facility, as an outpatient, or at home.</p>
        <h1 id = "ischemic_treatment"> Join a Clinical Study</h1>
        <p class = "rehab_info">By participating in a stroke clinical trial, you’re taking an active role in your health and helping others by contributing to medical research.</p>

        <p class = "rehab_info">You’ll also:</p>
        <ul class = "study_info">
            <li>Gain access to new treatments that aren’t available to the public.</li>
            <li>Obtain expert care at leading health care facilities. Medical visits related to the study are free. This includes physical exams, doctors’ visits, medications and lab tests.</li>
        </ul>
        <div id = "button_row" class = "row">
            <button id = "trial_btn" type="button" class="btn btn-light">Learn about more about Clinical Trials</button>
        </div>
        <div class = "row citation">
            <p>Information provided by  
            <a href="https://www.mayoclinic.org/diseases-conditions/stroke/diagnosis-treatment/drc-20350119"> Mayo Clinic</a></p>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script type="text/javascript">
    document.getElementById("trial_btn").onclick = function () {
        location.href = "/final_project/clinical_trial.php";
    };
</script>
</body>
</html>