function createButton(value){
    var button = document.createElement('input');
    button.type = 'button';
    button.value = value;
    if(value == "yes")
    button.className = 'btn btn-warning mx-2';
    else
    button.className = 'btn btn-danger mx-2';
    return button;
}

var parent = document.getElementById("parent");
var question = document.getElementById("question");
var selectButton = document.getElementById("selectButton");
var pointGroupList = document.getElementById("pointGroupList");
var moleculeStructureList = document.getElementById("moleculeStructureList");
var dihedralList = document.getElementById("dihedralList");
var message = document.getElementById("message");


function processData(data, value){
    var myData = data[value];
    var linear_molecule = myData.linear_molecule;
    var inversion_centre = myData.inversion_center;
    var point_group = myData.point_group;
    var cn_axissymmetry = myData.cn_axissymmetry;
    var cn2_perp = myData.cn2_perp;
    var tetrahed_struc = myData.tetrahed_struc;
    var octahed_struc = myData.octahed_struc;
    var icosahed_struc = myData.icosahed_struc;
    var nc2_perp_cn = myData.nc2_perp_cn;
    var dihedral_plane = myData.dihedral_plane;
    var sig_h = myData.sig_h;
    var sig_d = myData.sig_d;
    var sig_v = myData.sig_v;
    var reflection_plane = myData.reflection_plane;
    var sn_symmetry = myData.sn_symmetry;
    var centre_symmetry = myData.centre_symmetry;



    question.innerHTML = "Is Molecule Linear ?";
    selectButton.classList.remove('d-none');
    var yesLinear = createButton("yes");
    var noLinear = createButton("no");
    selectButton.appendChild(yesLinear);
    selectButton.appendChild(noLinear);

    yesLinear.addEventListener("click", ()=>{
        yesLinear.remove();
        noLinear.remove();

        if (linear_molecule == true) {
            // ASK Question 2
            question.innerHTML = "Does it have inversion_center";
            var yesBtn = createButton("yes");
            var noBtn = createButton("no");
            selectButton.appendChild(yesBtn);
            selectButton.appendChild(noBtn);

            yesBtn.addEventListener('click', (e)=>{
                yesBtn.remove();
                noBtn.remove();
                // User pressed Yes button now check if actually our atom has inversion_center or not?
                if(inversion_centre == true){
                    // ASK Question 3
                    question.innerHTML = "Select its Point Group"

                    pointGroupList.classList.remove('d-none');
                    pointGroupList.addEventListener('change', ()=>{
                        let user_pointGroup = pointGroupList.value;
                        point_group = "Dh";
                        if(user_pointGroup == point_group)
                            message.innerHTML = "SUCCESS";
                        else
                            message.innerHTML = "INCORRECT ANSWER";
                    });
                }
                else{
                    message.innerHTML("Failure! (Inversion Center)")
                }
            });
            noBtn.addEventListener('click', (e)=>{
                yesBtn.remove();
                noBtn.remove();
                if(inversion_centre == false){
                    // ASK Question 3
                    question.innerHTML = "Select its Point Group"
                    pointGroupList.classList.remove('d-none');
                    pointGroupList.addEventListener('change', ()=>{
                        let user_pointGroup = pointGroupList.value;
                        point_group = "CinfV";
                        if(user_pointGroup == point_group)
                            message.innerHTML = "SUCCESS";
                        else
                            message.innerHTML = "INCORRECT ANSWER";
                    });
                }
                else{
                    console.log("WE ARE IN NO BUTTON OF INVERSION CENTER")
                    question.innerHTML = "";
                    message.innerHTML = "Failure! You did Wrong Analysis (Inversion Center)";
                }
            });
        }
        else{
            message.innerHTML = "Failure!, You did Wrong Analysis (Linear Molecule)";
        }
    });

    noLinear.addEventListener("click", ()=>{
        yesLinear.remove();
        noLinear.remove();

        if (linear_molecule == false) {
            question.innerHTML = "Is there any Cn Axis of Symmetry?";
            var yesBtn = createButton("yes");
            var noBtn = createButton("no");
            selectButton.appendChild(yesBtn);
            selectButton.appendChild(noBtn);

            yesBtn.addEventListener('click', ()=>{
                if(cn_axissymmetry == true){
                    yesBtn.remove();
                    noBtn.remove();


                    // Ask Another Question
                    question.innerHTML = "Are there nC2 perpendicular to Cn?"
                    var yesPerp = createButton("yes");
                    var noPerp = createButton("no");
                    selectButton.appendChild(yesPerp);
                    selectButton.appendChild(noPerp);

                    yesPerp.addEventListener('click', ()=>{
                        if(cn2_perp == true){
                            yesPerp.remove();
                            noPerp.remove();
                            question.innerHTML = "Is there any Dihedral Plane Present";
                            var yesDihedral = createButton("yes");
                            var noDihedral = createButton("no");
                            selectButton.appendChild(yesDihedral);
                            selectButton.appendChild(noDihedral);

                            yesDihedral.addEventListener('click', ()=>{
                                if(dihedral_plane == true){
                                    question.innerHTML = "Select Dihedral Plane";
                                    dihedralList.classList.remove('d-none');
                                    yesDihedral.remove();
                                    noDihedral.remove();

                                    dihedralList.addEventListener('change', ()=>{
                                        let plane = dihedralList.value;

                                        question.innerHTML = "Select Point Group";
                                        pointGroupList.classList.remove('d-none');
                                        dihedralList.classList.add('d-none');

                                        pointGroupList.addEventListener('change', ()=>{
                                            let user_pointGroup = pointGroupList.value;
                                            if(user_pointGroup == point_group)
                                                message.innerHTML = "SUCCESS";
                                            else
                                                message.innerHTML = "INCORRECT ANSWER";
                                        });
                                    })
                                }
                                else{
                                    yesDihedral.remove();
                                    noDihedral.remove();
                                    question.innerHTML = "";
                                    message.innerHTML = "Failure, There is No Dihedral Plane"
                                }
                            })
                            noDihedral.addEventListener('click', ()=>{
                                if(dihedral_plane == false){
                                    yesDihedral.remove();
                                    noDihedral.remove();
                                    question.innerHTML = "Select Point Group";
                                    pointGroupList.classList.remove('d-none');
                                    dihedralList.classList.add('d-none');

                                    pointGroupList.addEventListener('change', ()=>{
                                        let user_pointGroup = pointGroupList.value;
                                        point_group = "D2";
                                        if(user_pointGroup == point_group)
                                            message.innerHTML = "SUCCESS";
                                        else
                                            message.innerHTML = "INCORRECT ANSWER";
                                    });
                                }
                                else{
                                    yesDihedral.remove();
                                    noDihedral.remove();
                                    question.innerHTML = "";
                                    message.innerHTML = "Failure, Dihedral Plane is present";
                                }
                            })
                        }
                        else{
                            yesPerp.remove();
                            noPerp.remove();
                            question.innerHTML = "";
                            message.innerHTML = "Fail, nC2 is NOT perpendicular to Cn"
                        }
                    })

                    noPerp.addEventListener('click', ()=>{
                        if(cn2_perp == false){
                            yesPerp.remove();
                            noPerp.remove();
                            question.innerHTML = "Is there any reflextion plane ?";
                            var yesReflection = createButton("yes");
                            var noReflection = createButton("no");
                            selectButton.appendChild(yesReflection);
                            selectButton.appendChild(noReflection);

                            yesReflection.addEventListener('click', ()=>{
                                if(reflection_plane == true){
                                    pointGroupList.classList.remove('d-none');
                                    pointGroupList.addEventListener('change', ()=>{
                                        point_group = "C5"
                                        let user_pointGroup = pointGroupList.value;
                                        if(user_pointGroup == point_group)
                                        message.innerHTML = "SUCCESS";
                                        else
                                        message.innerHTML = "INCORRECT ANSWER";
                                    });
                                }
                                else{
                                    yesReflection.remove();
                                    noReflection.remove();
                                    question.innerHTML = "";
                                    message.innerHTML = "Failure, There is no Reflection Plane!";
                                }
                            })

                            noReflection.addEventListener('click', ()=>{
                                if(reflection_plane == false){
                                    yesReflection.remove();
                                    noReflection.remove();
                                    question.innerHTML = "I there Sn Axis of Symmetry?";
                                    var yesSnSymmetry = createButton("yes");
                                    var noSnSymmetry = createButton("no");
                                    selectButton.appendChild(yesSnSymmetry);
                                    selectButton.appendChild(noSnSymmetry);

                                    yesSnSymmetry.addEventListener('click', ()=>{
                                        if(sn_symmetry == true){
                                            yesSnSymmetry.remove();
                                            noSnSymmetry.remove();
                                            pointGroupList.classList.remove('d-none');
                                            pointGroupList.addEventListener('change', ()=>{
                                                let user_pointGroup = pointGroupList.value;
                                                point_group = "S4";
                                                if(user_pointGroup == point_group)
                                                    message.innerHTML = "SUCCESS";
                                                else
                                                    message.innerHTML = "INCORRECT ANSWER";
                                            });
                                        }
                                        else{
                                            yesSnSymmetry.remove();
                                            noSnSymmetry.remove();
                                            question.innerHTML = "";
                                            message.innerHTML = "Failure, Sn Symmetry NOT Present";
                                        }
                                    })
                                    noSnSymmetry.addEventListener('click', ()=>{
                                        if(sn_symmetry == false){
                                            yesSnSymmetry.remove();
                                            noSnSymmetry.remove();
                                            question.innerHTML = "Is there Center of Symmetry?";
                                            var yesCenter = createButton("yes");
                                            var noCenter = createButton("no");
                                            selectButton.appendChild(yesCenter);
                                            selectButton.appendChild(noCenter);

                                            yesCenter.addEventListener('click', ()=>{
                                                if(centre_symmetry == true){
                                                    yesCenter.remove();
                                                    noCenter.remove();
                                                    question.innerHTML = "Select Point Group";
                                                    pointGroupList.classList.remove('d-none');
                                                    pointGroupList.addEventListener('change', ()=>{
                                                        let user_pointGroup = pointGroupList.value;
                                                        point_group = "Ci";
                                                        if(user_pointGroup == point_group)
                                                            message.innerHTML = "SUCCESS";
                                                        else
                                                            message.innerHTML = "INCORRECT ANSWER";
                                                    });
                                                }
                                                else{
                                                    yesCenter.remove();
                                                    noCenter.remove();
                                                    question.innerHTML = "";
                                                    message.innerHTML = "Failure, Center of Symmetry NOT Present";
                                                }
                                            })
                                            noCenter.addEventListener('click', ()=>{
                                                if(centre_symmetry == false){
                                                    yesCenter.remove();
                                                    noCenter.remove();
                                                    question.innerHTML = "Select Point Group";
                                                    pointGroupList.classList.remove('d-none');
                                                    pointGroupList.addEventListener('change', ()=>{
                                                        let user_pointGroup = pointGroupList.value;
                                                        point_group = "C1";
                                                        if(user_pointGroup == point_group)
                                                            message.innerHTML = "SUCCESS";
                                                        else
                                                            message.innerHTML = "INCORRECT ANSWER";
                                                    });
                                                }
                                                else{
                                                    yesCenter.remove();
                                                    noCenter.remove();
                                                    question.innerHTML = "";
                                                    message.innerHTML = "Failure, Center of Symmetry Present";
                                                }
                                            })
                                        }
                                        else{
                                            yesSnSymmetry.remove();
                                            noSnSymmetry.remove();
                                            question.innerHTML = "";
                                            message.innerHTML = "Failure, Sn Symmetry Is Present";
                                        }
                                    })
                                }
                                else{
                                    yesReflection.remove();
                                    noReflection.remove();
                                    question.innerHTML = "";
                                    message.innerHTML = "Failure, There is a reflection plane";
                                }
                            })
                        }
                        else{
                            yesPerp.remove();
                            noPerp.remove();
                            question.innerHTML = "";
                            message.innerHTML = "Failure, nC2 is Perpendicular to Cn";
                        }
                    })
                }
                else{
                    yesBtn.remove();
                    noBtn.remove();
                    question.innerHTML = "";
                    message.innerHTML = "Failure: Molecule Does Not have Cn Axis Symmetry";
                }
            })

            noBtn.addEventListener('click', ()=>{
                if(cn_axissymmetry == false){
                    yesBtn.remove();
                    noBtn.remove();
                    question.innerHTML = "The Molecule Belongs to which Structure?"
                    moleculeStructureList.classList.remove('d-none');

                    moleculeStructureList.addEventListener('change', ()=>{
                        let structure = moleculeStructureList.value;

                        question.innerHTML = "Select its Point Group"
                        pointGroupList.classList.remove('d-none');
                        moleculeStructureList.classList.add('d-none');
                        pointGroupList.addEventListener('change', ()=>{
                            let user_pointGroup = pointGroupList.value;

                            if(structure == 'tetrahedral' && user_pointGroup == "Td")
                                message.innerHTML = "SUCCESS";

                            else if(structure == 'octahedral' && user_pointGroup == "Oh")
                                message.innerHTML = "SUCCESS";

                            else if(structure == 'isosahedral' && user_pointGroup == "Ih")
                                message.innerHTML = "SUCCESS";
                            else
                                message.innerHTML = "INCORRECT ANSWER";
                        });
                    });
                }
                else{
                    yesBtn.remove();
                    noBtn.remove();
                    question.innerHTML = "";
                    message.innerHTML = "failure, Molecule has Cn Axis Symmetry";
                }
            })
        }
        else{
            message.innerHTML = "Failure!, You did Wrong Analysis (Non Linear Molecule)";
        }
    });

}   // end of processData function



function simulator1(){
    let transformBallAndStick = new ChemDoodle.TransformCanvas3D("3dSketcher", 700, 600, true);
    transformBallAndStick.styles.set3DRepresentation("Ball and Stick");
    transformBallAndStick.styles.atoms_displayLabels_3D = true;
    transformBallAndStick.styles.backgroundColor = 'transparent';

    let path = "ChemDoodleWeb-9.5.0/data/molecules/caffeine.mol";
    ChemDoodle.io.file.content(path, function(content){
        let mol = ChemDoodle.readMOL(content, 2);
        transformBallAndStick.loadMolecule(mol);
    })
}



function drawMolecule(obj){
    let path = "ChemDoodleWeb-9.5.0/data/molecules/" + obj.value + ".mol";
    ChemDoodle.io.file.content(path, function(content){
        let mol = ChemDoodle.readMOL(content, 2);
        transformBallAndStick.loadMolecule(mol);
    })


    fetch('properties.json')
        .then(response => response.json())
        .then(data => processData(data, obj.value))
        .catch(error => console.error(error));

}

function setModel(obj){
    let model = obj.value;
    transformBallAndStick.styles.set3DRepresentation(model);
}
