<?php
# PHPlot Demo
# 2009-12-01 ljb
# For more information see http://sourceforge.net/projects/phplot/

# Load the PHPlot class library:
require_once 'phplot.php';

# Define the data array: Label, the 3 data sets.
# Year,  Features, Bugs, Happy Users:
$data = array(
  array('ktm',  74,  88,  20),
  array('bkt',  65,  30,  30),
  array('lalitpur',  75,  15,  70),
  array('kavre',  70,  25,  40),
  array('Sidhupalchowk',  72,  20,  60)
);

# Create a PHPlot object which will make an 800x400 pixel image:
$p = new PHPlot(800, 400);

# Use TrueType fonts:
$p->SetDefaultTTFont('fonts/tahoma.ttf');

# Set the main plot title:
$p->SetTitle('PHPlot Customer Satisfaction (estimated)');

# Select the data array representation and store the data:
$p->SetDataType('text-data');
$p->SetDataValues($data);

# Select the plot type - bar chart:
$p->SetPlotType('bars');

# Define the data range. PHPlot can do this automatically, but not as well.
$p->SetPlotAreaWorld(0, 0, 9, 100);

# Select an overall image background color and another color under the plot:
$p->SetBackgroundColor('#ffffcc');
$p->SetDrawPlotAreaBackground(True);
$p->SetPlotBgColor('#ffffff');

# Draw lines on all 4 sides of the plot:
$p->SetPlotBorderType('full');

# Set a 3 line legend, and position it in the upper left corner:
$p->SetLegend(array('Total Popn', 'Injured', 'Death'));
$p->SetLegendWorld(0.1, 95);

# Turn data labels on, and all ticks and tick labels off:
$p->SetXDataLabelPos('plotdown');
$p->SetXTickPos('none');
$p->SetXTickLabelPos('none');
$p->SetYTickPos('none');
$p->SetYTickLabelPos('none');

# Generate and output the graph now:
$p->DrawGraph();
