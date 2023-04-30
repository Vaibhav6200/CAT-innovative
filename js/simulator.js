function simulation2(){
    ChemDoodle.ELEMENT['H'].jmolColor = 'black';
    ChemDoodle.ELEMENT['S'].jmolColor = '#B9A130';
    let sketcher = new ChemDoodle.SketcherCanvas('sketcher', 400, 360, {useServices:true, oneMolecule:true});
    sketcher.styles.atoms_displayTerminalCarbonLabels_2D = true;
    sketcher.styles.atoms_useJMOLColors = true;
    sketcher.styles.bonds_clearOverlaps_2D = true;
    sketcher.styles.shapes_color = 'c10000';
    sketcher.oldFunc = sketcher.checksOnAction;
    sketcher.checksOnAction = function(force){
        this.oldFunc(force);
        let m = this.getMolecule();
        let transform = new ChemDoodle.TransformCanvas3D("3dSketcher", 400, 360);
        transform.styles.set3DRepresentation('Ball and Stick');
        // transform.styles.set3DRepresentation('van der Waals Spheres');
        // transform.styles.set3DRepresentation('Stick');
        // transform.styles.set3DRepresentation('Wireframe');
        // transform.styles.set3DRepresentation('Line');
        transform.styles.backgroundColor = 'black';
        transformBallAndStick.styles.atoms_displayLabels_3D = true;
        transform.loadMolecule(m);
    }

    sketcher.repaint();
}
