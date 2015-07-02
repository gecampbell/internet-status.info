#!/bin/sh

cd site

#
# This is actually crucial to the functioning of the site. Use of the
# Cache-Control: no-cache header ensures (supposedly) that the page
# is refreshed every time the browser hits it, thus ensuring the
# continuity of the end-to-end full-Internet testing.
#
aws s3 cp index.html s3://internet-status.info \
	--cache-control 'no-cache, must-revalidate' \
	--content-type 'text/html; charset=utf-8'

# For the FAQ page, we don't care if it's cached. 
aws s3 cp faq.html s3://internet-status.info \
	--cache-control 'max-age=3600' \
	--content-type 'text/html; charset=utf-8'
