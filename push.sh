#!/bin/sh

aws s3 cp index.html s3://internet-status.info \
	--cache-control 'no-cache, must-revalidate' \
	--content-type 'text/html; charset=utf-8'
aws s3 cp faq.html s3://internet-status.info \
	--cache-control 'max-age=3600' \
	--content-type 'text/html; charset=utf-8'
