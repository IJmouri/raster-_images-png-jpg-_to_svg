For this conversion you need to install ImageMagick and potrace.
potrace can convert pbm/pgm/ppm/bmp to svg. So at first we need to convert png/jpg to pbm/pgm/ppm/bmp using imagemagick. Than we will convert it to svg using potrace via command line.

Note: If you want a clear svg where each element's path is perfect, you have to give a clear raster image with each element.  