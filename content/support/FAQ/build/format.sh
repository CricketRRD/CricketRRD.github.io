#!/bin/sh

BUILD=`pwd`
#JADELIB=/usr/local/share/sgml/jade
JADELIB=/usr/lib/jade
#DOCBOOKLIB=/usr/local/share/sgml/docbook
DOCBOOKLIB=$BUILD/share/sgml/docbook
jade -ioutput.html -ioutput.html.images -V nochunks \
	-c $BUILD/share/sgml/catalog \
	-c $DOCBOOKLIB/dsssl/modular/catalog \
	-c $DOCBOOKLIB/catalog \
	-c $JADELIB/catalog  \
	-d $BUILD/share/sgml/default.dsl \
	-t sgml $BUILD/cricket-faq.sgml > cricket-faq.html || (rm -f cricket-faq.html && false)
tidy -i -m -f /dev/null  cricket-faq.html
cp $BUILD/share/web2c/pdftex.def cricket-faq.tex-pdf
jade -Vtex-backend -ioutput.print -ioutput.print.pdf  \
	-c $BUILD/share/sgml/catalog \
	-c $DOCBOOKLIB/dsssl/modular/catalog \
	-c $DOCBOOKLIB/catalog \
	-c $JADELIB/catalog  \
	-d $BUILD/share/sgml/default.dsl \
	-t tex -o /dev/stdout $BUILD/cricket-faq.sgml >> cricket-faq.tex-pdf
