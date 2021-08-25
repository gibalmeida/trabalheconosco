import React from "react";

export default function FormSection({
    value,
    className,
    children,
}) {
    return (
        <div className="flex flex-col md:flex-row md:flex-wrap gap-2 p-3">
            <div className="w-full">
                <h2 className={`text-center md:text-left text-xl text-gray-500 font-semibold `+(className ? className : "")}>{value}</h2>
            </div>
            {children}
        </div>
    );
}
