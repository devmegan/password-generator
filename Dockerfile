FROM php:latest

COPY oop-generate.php /
COPY generate.sh /

ENTRYPOINT ["/generate.sh"]

CMD ["$1", "'$2'"]
